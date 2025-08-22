<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inovasi Mobil Senyum - Polres Tulungagung</title>
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
            <a href="{{ route('inovasi.index') }}"
                class="inline-flex items-center mb-8 text-gray-600 hover:text-yellow-500 transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Inovasi
            </a>

            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 uppercase">Mobil Senyum</h1>
                <p class="text-gray-500 mt-2">Berbagi Makanan Bergizi Gratis</p>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mt-4"></div>
            </div>

            <div class="max-w-4xl mx-auto bg-gray-50 p-8 rounded-lg shadow-lg text-gray-700">
                <p class="mb-6 leading-relaxed">
                    <strong>Mobil Senyum</strong> merupakan program dari Polres Tulungagung yang bertujuan untuk berbagi
                    kebahagiaan dengan memberikan makanan bergizi kepada masyarakat secara menarik dan menyenangkan,
                    khususnya kepada anak-anak. Program ini juga merupakan bentuk dukungan terhadap program pemerintah
                    dalam memberikan makanan bergizi.
                </p>

                <div class="my-8 text-center">
                    <img src="{{ asset('assets/images/mobilsenyum.png') }}" alt="Mobil Senyum"
                        class="mx-auto rounded-lg shadow-lg max-w-full h-auto">
                </div>

                <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4">Kegiatan dan Tujuan</h2>
                <ul class="list-disc pl-5 space-y-2 mb-4">
                    <li><strong>Distribusi Makanan Gratis</strong>: Mobil Senyum beroperasi dengan membagikan makanan
                        dan minuman bergizi gratis kepada masyarakat, terutama anak-anak sekolah.</li>
                    <li><strong>Dukungan UMKM Lokal</strong>: Makanan dan minuman yang dibagikan merupakan produksi dari
                        UMKM lokal di Tulungagung, sehingga program ini juga turut mendukung dan mengembangkan
                        perekonomian lokal.</li>
                    <li><strong>Sinergi dengan Pengusaha</strong>: Program ini merupakan hasil kerja sama sinergis
                        antara Polres Tulungagung dengan Himpunan Pengusaha Muda Indonesia (HIPMI) Kabupaten
                        Tulungagung.</li>
                </ul>
                <p class="mb-6">
                    Kapolres Tulungagung, AKBP Muhammad Taat Resdianto, menjelaskan bahwa Mobil Senyum adalah modifikasi
                    dari kegiatan kemasyarakatan yang sudah rutin dilaksanakan seperti Polisi Sahabat Anak, Jumat
                    Curhat, Jumat Berkah, dan Minggu Kasih. Mobil ini dirancang khusus untuk menarik perhatian anak-anak
                    dan memberikan pengalaman positif dalam berinteraksi dengan kepolisian.
                </p>

                <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4">Lebih Lanjut Tentang Mobil Senyum
                </h2>
                <p class="mb-6 leading-relaxed">
                    Mobil Senyum tidak hanya sekadar membagikan makanan, tetapi juga menjadi sarana edukasi dan
                    sosialisasi berbagai program kepolisian kepada masyarakat. Kehadirannya di berbagai lokasi
                    strategis, seperti sekolah dan tempat keramaian, bertujuan untuk mendekatkan diri dengan masyarakat
                    dan membangun kepercayaan.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-8">
                    <div>
                        <img src="{{ asset('assets/images/mobilsenyum1.png') }}" alt="Kegiatan Mobil Senyum 1"
                            class="w-full h-48 object-cover rounded-lg shadow-md">
                        <p class="text-sm text-gray-500 mt-2 text-center">Interaksi hangat antara polisi dan anak-anak.
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/mobilsenyum2.png') }}" alt="Kegiatan Mobil Senyum 2"
                            class="w-full h-48 object-cover rounded-lg shadow-md">
                        <p class="text-sm text-gray-500 mt-2 text-center">Pembagian makanan bergizi kepada anak-anak.
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('assets/images/mobilsenyum3.png') }}" alt="Kegiatan Mobil Senyum 3"
                            class="w-full h-48 object-cover rounded-lg shadow-md">
                        <p class="text-sm text-gray-500 mt-2 text-center">Mobil Senyum beroperasi di tengah masyarakat.
                        </p>
                    </div>
                </div>

                <h2 class="text-2xl font-semibold text-gray-800 border-b pb-2 mb-4">Manfaat Program</h2>
                <p class="mb-4">
                    Dengan adanya Mobil Senyum, diharapkan tidak hanya memberikan kebahagiaan dan gizi yang lebih baik
                    kepada anak-anak dan masyarakat, tetapi juga dapat menjadi wadah untuk mempererat hubungan antara
                    kepolisian dengan masyarakat, serta mendukung pertumbuhan UMKM di Tulungagung. Program ini juga
                    menjadi wujud nyata kepedulian Polri terhadap kesejahteraan masyarakat, khususnya generasi penerus
                    bangsa.
                </p>
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
                        <li><a href="{{ url('/') }}" class="hover:text-yellow-400">Beranda</a></li>
                        <li><a href="{{ route('profil.publik') }}" class="hover:text-yellow-400">Profil</a></li>
                        <li><a href="{{ route('inovasi.index') }}" class="hover:text-yellow-400">Inovasi</a></li>
                        <li><a href="{{ route('faq.index') }}" class="hover:text-yellow-400">FAQ</a></li>
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
                            <span class="text-gray-400">110</span>
                        </li>
                    </ul>
                    <div class="flex space-x-4 mt-6">
                        <a href="https://www.facebook.com/humastulungagung?mibextid=LQQJ4d" aria-label="Facebook"
                            class="text-gray-300 hover:text-yellow-400"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="https://x.com/Res1Tulungagung?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                            aria-label="Twitter" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-twitter fa-lg"></i></a>
                        <a href="https://www.instagram.com/polrestulungagung?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            aria-label="Instagram" class="text-gray-300 hover:text-yellow-400"><i
                                class="fab fa-instagram fa-lg"></i></a>
                        <a href="https://www.youtube.com/@humaspolrestulungagung2604" aria-label="Youtube"
                            class="text-gray-300 hover:text-yellow-400"><i class="fab fa-youtube fa-lg"></i></a>
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
            once: true
        });
    </script>
</body>

</html>
