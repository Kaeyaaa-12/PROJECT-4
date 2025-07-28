<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan SPKT - Polres Tulungagung</title>
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
                    <img src="{{ asset('assets/images/poldajatim.png') }}" alt="Logo Polda Jatim" class="h-16">
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
                <h1 class="text-4xl font-bold text-gray-800 uppercase">Sentra Pelayanan Kepolisian Terpadu</h1>
                <p class="text-gray-500 mt-2">Pusat Pelaporan dan Pengaduan Masyarakat Polres Tulungagung.</p>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mt-4"></div>
            </div>

            <div class="max-w-4xl mx-auto bg-gray-50 p-8 rounded-lg shadow-lg">
                <div class="prose max-w-none text-gray-700">
                    <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4">Apa itu SPKT?</h2>
                    <p>SPKT (Sentra Pelayanan Kepolisian Terpadu) adalah pusat pelayanan terdepan Kepolisian yang
                        bertugas memberikan pelayanan kepada masyarakat dalam bentuk penerimaan Laporan Polisi (LP),
                        Surat Tanda Terima Laporan Polisi (STTLP), dan pengaduan lainnya. SPKT merupakan gerbang utama
                        bagi masyarakat yang membutuhkan bantuan kepolisian.</p>

                    <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4 mt-8">Visi dan Misi</h2>
                    <h3 class="font-bold text-lg text-gray-800">Visi</h3>
                    <p>"Terwujudnya pelayanan prima guna mendukung supremasi hukum dalam rangka menciptakan Kamtibmas
                        yang kondusif."</p>

                    <h3 class="font-bold text-lg text-gray-800 mt-4">Misi</h3>
                    <ol class="list-decimal list-inside space-y-2 mt-2">
                        <li>Memberikan pelayanan Kepolisian kepada masyarakat secara mudah, cepat, tepat, transparan,
                            dan akuntabel.</li>
                        <li>Meningkatkan kualitas sumber daya manusia SPKT yang profesional, modern, dan terpercaya.
                        </li>
                        <li>Mengoptimalkan pemanfaatan teknologi informasi dalam menunjang pelayanan Kepolisian.</li>
                        <li>Membangun kemitraan dengan masyarakat dan instansi terkait dalam rangka pemeliharaan
                            Kamtibmas.</li>
                    </ol>

                    <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4 mt-8">Produk Layanan</h2>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Penerimaan Laporan Polisi (LP).</li>
                        <li>Penerimaan Laporan Kehilangan Barang/Surat.</li>
                        <li>Penerimaan Pengaduan Masyarakat.</li>
                        <li>Pemberian Surat Tanda Terima Laporan Polisi (STTLP).</li>
                        <li>Penanganan pertama Tempat Kejadian Perkara (TPTKP) untuk kasus ringan.</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4 mt-8">Persyaratan Pelayanan</h2>
                    <p>Untuk membuat laporan, masyarakat diharapkan membawa:</p>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Identitas diri pelapor (KTP/SIM/Paspor).</li>
                        <li>Data terlapor (jika ada/diketahui).</li>
                        <li>Bukti-bukti awal yang relevan dengan perkara yang dilaporkan (jika ada).</li>
                        <li>Mengetahui kronologis singkat kejadian.</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4 mt-8">Mekanisme Pelayanan</h2>
                    <ol class="list-decimal list-inside space-y-3">
                        <li>Pelapor datang ke ruang SPKT Polres Tulungagung.</li>
                        <li>Petugas SPKT menyambut dan menanyakan keperluan pelapor.</li>
                        <li>Pelapor menyampaikan maksud dan tujuan serta menjelaskan kronologi kejadian.</li>
                        <li>Petugas melakukan wawancara singkat untuk melengkapi informasi.</li>
                        <li>Petugas membuatkan Laporan Polisi (LP) atau Surat Tanda Terima Laporan (STTL) sesuai jenis
                            laporan.</li>
                        <li>Pelapor menandatangani laporan yang telah dibuat.</li>
                        <li>Petugas menyerahkan salinan STTLP kepada pelapor sebagai bukti lapor.</li>
                    </ol>

                    <div class="mt-8 text-center bg-blue-50 border-t-4 border-blue-500 p-6 rounded-b-lg">
                        <p class="font-bold text-blue-800">Seluruh proses pelayanan di SPKT tidak dipungut biaya
                            (GRATIS).</p>
                    </div>
                </div>

                <div id="form-aduan" class="mt-16 pt-8 border-t-2 border-gray-200">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 uppercase">Form Aduan Online</h2>
                        <p class="text-gray-500 mt-2">Sampaikan kritik, saran, atau laporan Anda secara online.</p>
                    </div>

                    @if (session('success'))
                        <div class="mb-6 p-4 text-sm text-green-800 bg-green-100 rounded-lg text-center" role="alert">
                            <span class="font-medium">Berhasil!</span> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('layanan.aduan.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-6">
                        @csrf
                        <div>
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-700">Nama
                                Pelapor</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                                required>
                            @error('nama')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="jenis_aduan" class="block mb-2 text-sm font-medium text-gray-700">Jenis
                                Aduan</label>
                            <input type="text" id="jenis_aduan" name="jenis_aduan" value="{{ old('jenis_aduan') }}"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                                placeholder="Contoh: Kehilangan Barang, Tindak Kriminal, dll." required>
                            @error('jenis_aduan')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="waktu_kejadian" class="block mb-2 text-sm font-medium text-gray-700">Waktu
                                    Kejadian</label>
                                <input type="datetime-local" id="waktu_kejadian" name="waktu_kejadian"
                                    value="{{ old('waktu_kejadian') }}"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                                    required>
                                @error('waktu_kejadian')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="lokasi_kejadian" class="block mb-2 text-sm font-medium text-gray-700">Lokasi
                                    Kejadian</label>
                                <input type="text" id="lokasi_kejadian" name="lokasi_kejadian"
                                    value="{{ old('lokasi_kejadian') }}"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                                    required>
                                @error('lokasi_kejadian')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="isi_laporan" class="block mb-2 text-sm font-medium text-gray-700">Isi Laporan
                                / Kronologi</label>
                            <textarea id="isi_laporan" name="isi_laporan" rows="5"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                                required>{{ old('isi_laporan') }}</textarea>
                            @error('isi_laporan')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="bukti" class="block mb-2 text-sm font-medium text-gray-700">Upload Bukti
                                (Opsional)</label>
                            <input type="file" id="bukti" name="bukti"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-yellow-100 file:text-yellow-700 hover:file:bg-yellow-200">
                            <p class="mt-1 text-xs text-gray-500">Format: JPG, PNG, PDF. Maksimal 2MB.</p>
                            @error('bukti')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="text-right">
                            <button type="submit"
                                class="bg-yellow-500 text-black font-bold py-3 px-8 rounded-lg hover:bg-yellow-600 transition-colors shadow-lg">
                                Kirim Laporan
                            </button>
                        </div>
                    </form>
                </div>
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
                            <a href="https://maps.app.goo.gl/maps/google.com/0" target="_blank"
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
                © 2025 Kepolisian Resor Tulungagung. Semua Hak Cipta Dilindungi.
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
