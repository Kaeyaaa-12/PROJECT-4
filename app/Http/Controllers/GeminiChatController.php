<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeminiChatController extends Controller
{
    public function generateContent(Request $request)
    {
        if (!env('GEMINI_API_KEY')) {
            Log::error('GEMINI_API_KEY is not set in the .env file.');
            return response()->json(['reply' => 'Maaf, layanan Chatbot tidak dikonfigurasi dengan benar (API Key hilang).'], 500);
        }

        $userMessage = $request->input('message');
        $chatHistory = $request->input('history', []);

        // Definisi Instruksi Sistem yang akan digabungkan ke pesan pertama
        $systemInstructionText = "Anda adalah Gemini Chatbot resmi Polres Tulungagung. Jawablah pertanyaan masyarakat dengan ramah, profesional, dan informatif. Fokus pada informasi umum kepolisian, layanan SKCK, SIM, aduan, dan inovasi Polres Tulungagung. Jawab dalam Bahasa Indonesia. Jika pertanyaan di luar konteks yang relevan dengan Polres Tulungagung, arahkan mereka untuk menghubungi Call Center 110. SELALU jawab sebagai asisten Polres Tulungagung.";

        // Gabungkan instruksi sistem ke pesan pengguna pertama
        $initialPrompt = $systemInstructionText . "\n\nPertanyaan user: " . $userMessage;

        // Susun riwayat chat (kecuali pesan pertama yang sudah digabungkan instruksi)
        $contents = collect($chatHistory)->map(function ($message) {
            return [
                'role' => $message['role'],
                'parts' => [['text' => $message['text']]]
            ];
        })->push([
            'role' => 'user',
            // Gunakan initialPrompt HANYA jika ini adalah pesan pertama dalam chat,
            // jika tidak, gunakan pesan pengguna biasa.
            'parts' => [['text' => (empty($chatHistory) ? $initialPrompt : $userMessage)]]
        ])->toArray();


        try {
            // --- PERBAIKAN AKHIR: systemInstruction DIHAPUS DARI PAYLOAD ---
            $response = Http::timeout(30)->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . env('GEMINI_API_KEY'), [
                'contents' => $contents,

                'generationConfig' => [
                    'temperature' => 0.7,
                    // system_instruction DIHILANGKAN DARI SINI
                ],
                // systemInstruction juga DIHILANGKAN DARI TOP-LEVEL
            ]);
            // --- AKHIR PERBAIKAN ---

            if ($response->successful()) {
                $text = $response->json('candidates.0.content.parts.0.text', 'Terjadi kesalahan saat memproses jawaban dari AI.');
                return response()->json(['reply' => $text]);
            }

            Log::error('Gemini API Call Failed', ['status' => $response->status(), 'body' => $response->body()]);
            return response()->json(['reply' => 'Maaf, terjadi kesalahan pada layanan AI. Status: ' . $response->status()], 500);

        } catch (\Exception $e) {
            Log::error('Chat Request Exception: ' . $e->getMessage());
            return response()->json(['reply' => 'Maaf, layanan chat sedang tidak tersedia karena masalah server.'], 500);
        }
    }
}
