<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Polres Tulungagung</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { padding-top: 148px; } /* Sesuaikan dengan tinggi header Anda */
    </style>
</head>
{{-- PERUBAHAN 1: Menambahkan kelas flexbox ke <body> --}}
<body class="bg-gray-100 font-sans flex flex-col min-h-screen">
    {{-- ================= HEADER ================= --}}
    <header class="bg-black text-white fixed top-0 left-0 right-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center border-b border-gray-600 pb-4">
                <div class="flex items-center space-x-5">
                    <img src="{{ asset('assets/images/lambang.png') }}" alt="Logo Polri" class="h-16">
                    <img src="{{ asset('assets/images/poldajatim.png') }}" alt="Logo Polda Jatim" class="h-16">
                    <div>
                        <h1 class="text-base font-bold uppercase">Kepolisian Negara Republik Indonesia</h1>
                        <h2 class="text-sm uppercase">Daerah Jawa Timur - Resor Tulungagung</h2>
                    </div>
                </div>
            </div>
            <nav class="flex justify-center items-center pt-4">
                <ul class="flex space-x-8 text-base font-semibold">
                    <li><a href="{{ route('landing') }}" class="hover:text-yellow-400">BERANDA</a></li>
                    <li><a href="{{ url('/#layanan-umum') }}" class="hover:text-yellow-400">LAYANAN</a></li>
                    <li><a href="{{ url('/#berita') }}" class="hover:text-yellow-400">BERITA</a></li>
                    <li><a href="{{ route('profil.publik') }}" class="text-yellow-400 font-bold">PROFIL</a></li>
                    <li><a href="{{ route('inovasi.index') }}" class="hover:text-yellow-400">INOVASI</a></li>
                    <li><a href="{{ route('faq.index') }}" class="hover:text-yellow-400">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- ================= KONTEN UTAMA ================= --}}
    {{-- PERUBAHAN 2: Menambahkan kelas flex-grow ke <main> --}}
    <main class="bg-white py-16 flex-grow">
        <div class="container mx-auto px-6">
            <a href="{{ route('profil.publik') }}" class="inline-flex items-center mb-10 text-gray-600 hover:text-yellow-500 transition-colors font-semibold">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Halaman Profil
            </a>
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div class="text-center mb-8">
                    
                    @if(isset($logo) && $logo)
                        <div class="bg-transparent">
                            <img src="{{ asset('assets/images/Logo/' . $logo) }}" alt="Logo Satuan Kerja" class="h-56 mx-auto mb-6 object-contain">
                        </div>
                    @endif
                    
                    <h1 class="text-3xl font-bold text-gray-800 uppercase">@yield('page-title')</h1>
                    <div class="w-24 h-1 bg-yellow-400 mx-auto mt-3"></div>
                </div>
                @yield('content')
            </div>
        </div>
    </main>

    {{-- ================= FOOTER ================= --}}
     <footer class="bg-black text-gray-300 pt-12 pb-8">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border-b border-gray-700 pb-8 mb-8"
                    data-aos="fade-up">
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
                                <a href="https://www.google.com/maps/search/?api=1&query=Polres+Tulungagung"
                                    target="_blank" rel="noopener noreferrer" class="flex items-start group">
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
                    © 2025 Kepolisian Resor Tulungagung. Semua Hak Cipta Dilindungi.
                </div>
            </div>
        </footer>
</body>
</html> 