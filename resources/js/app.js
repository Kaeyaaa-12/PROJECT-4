import "./bootstrap";

import Alpine from "alpinejs";
import axios from "axios"; // Wajib: Import Axios

window.Alpine = Alpine;
window.axios = axios; // Daftarkan Axios secara global

document.addEventListener("alpine:init", () => {
    Alpine.data("chatBot", () => ({
        messages: [],
        newMessage: "",
        isLoading: false,
        error: "",

        // Dipanggil saat x-init pada div utama
        initChat() {
            this.clearChat();
            this.scrollToBottom();
        },

        clearChat() {
            this.messages = [
                {
                    id: 1,
                    role: "model",
                    text: "Halo! Saya Chatbot AI Polres Tulungagung, siap membantu Anda dengan informasi layanan, SKCK, SIM, aduan, dan inovasi Polres. Ada yang bisa saya bantu?",
                },
            ];
            this.newMessage = "";
            this.isLoading = false;
            this.error = "";
            this.$nextTick(() => this.scrollToBottom());
        },

        async sendMessage() {
            if (!this.newMessage.trim() || this.isLoading) return;

            const userText = this.newMessage;
            this.newMessage = "";
            this.error = "";
            this.isLoading = true;

            // 1. Tambahkan pesan pengguna ke riwayat
            this.messages.push({
                id: Date.now(),
                role: "user",
                text: userText,
            });
            this.$nextTick(() => this.scrollToBottom());

            try {
                // 2. Siapkan riwayat chat untuk API
                const chatHistory = this.messages
                    .slice(1)
                    .map((msg) => ({ role: msg.role, text: msg.text }));

                // 3. Panggil API melalui endpoint Laravel yang terdaftar di web.php
                const response = await axios.post("/chatbot/chat", {
                    message: userText,
                    history: chatHistory,
                });

                // 4. Tambahkan balasan model
                this.messages.push({
                    id: Date.now() + 1,
                    role: "model",
                    text: response.data.reply,
                });
            } catch (e) {
                console.error("Chat API Error:", e);
                // Tambahkan pesan error jika request gagal
                const errorMessage =
                    e.response && e.response.data && e.response.data.reply
                        ? e.response.data.reply
                        : "Maaf, terjadi masalah koneksi ke server AI.";
                this.error = errorMessage;
                this.messages.push({
                    id: Date.now() + 1,
                    role: "model",
                    text: errorMessage,
                });
            } finally {
                this.isLoading = false;
                this.$nextTick(() => this.scrollToBottom());
            }
        },

        scrollToBottom() {
            const container = this.$refs.messagesContainer;
            if (container) {
                // Pastikan scroll terjadi setelah DOM diperbarui
                setTimeout(() => {
                    container.scrollTop = container.scrollHeight;
                }, 50);
            }
        },
    }));
});

Alpine.start();
