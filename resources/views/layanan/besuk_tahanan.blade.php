<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Besuk Tahanan - Polres Tulungagung</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            padding-top: 148px;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <header class="bg-black text-white fixed top-0 left-0 right-0 z-30 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center border-b border-gray-600 pb-4">
                <div class="flex items-center space-x-5">
                    <img src="{{ asset('assets/images/lambang.png') }}" alt="Logo Polri" class="h-16">
                    <div>
                        <h1 class="text-base font-bold uppercase">Kepolisian Negara Republik Indonesia</h1>
                        <h2 class="text-sm uppercase">Daerah Jawa Timur - Resor Tulungagung</h2>
                    </div>
                </div>
                <div class="text-right text-sm hidden md:block">
                    <p>Jl. Ahmad Yani Timur No.9, Bago, Kec. Tulungagung,</p>
                    <p>Kabupaten Tulungagung, Jawa Timur 66212</p>
                </div>
            </div>
            <nav class="flex justify-center items-center pt-4">
                <ul class="flex space-x-8 text-base font-semibold">
                    <li><a href="{{ url('/') }}" class="hover:text-yellow-400">BERANDA</a></li>
                    <li><a href="{{ url('/#layanan-umum') }}" class="hover:text-yellow-400">LAYANAN</a></li>
                    <li><a href="{{ url('/#berita') }}" class="hover:text-yellow-400">BERITA</a></li>

                    <li><a href="{{ route('profil.publik') }}" class="hover:text-yellow-400">PROFIL</a></li>
                    <li><a href="{{ route('inovasi.index') }}" class="hover:text-yellow-400">INOVASI</a></li>
                    <li><a href="{{ route('faq.index') }}" class="hover:text-yellow-400">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="bg-white py-20">
        <div class="container mx-auto px-6">
            <a href="{{ url('/#layanan-umum') }}"
                class="inline-flex items-center mb-8 text-gray-600 hover:text-yellow-500 transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Layanan
            </a>

            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 uppercase">Tata Tertib Kunjungan Tahanan</h1>
                <p class="text-gray-500 mt-2">Informasi jadwal dan aturan besuk di Rutan Polres Tulungagung.</p>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mt-4"></div>
            </div>

            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8 items-start">
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg" data-aos="fade-up">
                    <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4">Jadwal Kunjungan</h2>
                    <table class="w-full text-left text-gray-700">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="p-3">Hari</th>
                                <th class="p-3">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="p-3 font-medium">Selasa</td>
                                <td class="p-3">09.00 - 14.00 WIB</td>
                            </tr>
                            <tr class="border-b">
                                <td class="p-3 font-medium">Kamis</td>
                                <td class="p-3">09.00 - 14.00 WIB</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-sm mt-4 text-gray-500">*Jadwal dapat berubah sewaktu-waktu. Harap konfirmasi terlebih
                        dahulu.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4">Aturan Pengunjung</h2>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Pengunjung adalah keluarga inti (ayah, ibu, istri/suami, anak) atau penasihat hukum.</li>
                        <li>Wajib membawa dan menunjukkan KTP/identitas diri asli.</li>
                        <li>Berpakaian sopan dan rapi.</li>
                        <li>Dilarang membawa senjata tajam, narkoba, minuman keras, dan barang berbahaya lainnya.</li>
                        <li>Makanan dan barang bawaan akan diperiksa oleh petugas.</li>
                        <li>Dilarang membawa alat komunikasi (handphone) ke dalam ruang besuk.</li>
                        <li>Mengikuti arahan dan petunjuk dari petugas jaga tahanan.</li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 text-center bg-yellow-50 border-t-4 border-yellow-500 p-6 rounded-b-lg max-w-4xl mx-auto">
                <p class="text-yellow-800">Pelanggaran terhadap tata tertib akan dikenakan sanksi sesuai peraturan yang
                    berlaku.</p>
            </div>
        </div>
    </main>

    <footer class="bg-black text-gray-300 pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border-b border-gray-700 pb-8 mb-8" data-aos="fade-up">
                <div>
                    <h4 class="text-white text-lg font-bold mb-4">POLRES TULUNGAGUNG</h4>
                    <p class="text-sm text-gray-400 leading-relaxed">Website resmi Kepolisian Resor Tulungagung.
                        Kami berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat.</p>
                </div>
                <div>
                    <h4 class="text-white text-lg font-bold mb-4">TAUTAN CEPAT</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-yellow-400">Beranda</a></li>
                        <li><a href="#layanan-umum" class="hover:text-yellow-400">Layanan</a></li>
                        <li><a href="#berita" class="hover:text-yellow-400">Berita</a></li>
                        <li><a href="#galeri" class="hover:text-yellow-400">Galeri</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white text-lg font-bold mb-4">HUBUNGI KAMI</h4>
                    <ul class="space-y-3 text-sm">
                        <li>
                            <a href="https://www.google.com/maps/search/?api=1&query=Polres+Tulungagung" target="_blank"
                                rel="noopener noreferrer" class="flex items-start group">
                                <i class="fas fa-map-marker-alt mt-1 mr-3 text-yellow-400 w-4 text-center"></i>
                                <span class="text-gray-400 group-hover:text-yellow-400 transition-colors">Jl. Ahmad
                                    Yani Timur No.9, Bago, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur
                                    66212</span>
                            </a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-yellow-400 w-4 text-center"></i>
                            <span class="text-gray-400">(0355) 321110</span>
                        </li>
                    </ul>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" aria-label="Facebook" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" aria-label="Twitter" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-twitter fa-lg"></i></a>
                        <a href="https://www.instagram.com/polrestulungagung?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            aria-label="Instagram" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" aria-label="Youtube" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center text-sm text-gray-500">
                &copy; 2025 Kepolisian Resor Tulungagung. Semua Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>
</body>

</html>
