<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Polres Tulungagung</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .hero-bg {
            background-image: url("{{ asset('assets/images/Background.png') }}");
        }

        /* Memberi ruang di body untuk fixed header yang lebih besar */
        body {
            /* Perkiraan tinggi header baru: sekitar 148px */
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

    <div>

        <main class="relative h-screen -mt-[148px]">
            <div class="h-full flex items-center justify-center hero-bg bg-cover bg-center">
                <div class="absolute inset-0 bg-black opacity-40"></div>

                <div class="relative z-10 container mx-auto px-4 text-center text-white" data-aos="fade-in">
                    <h1 class="text-4xl lg:text-5xl font-bold uppercase">Profil Polres Tulungagung</h1>
                    <p class="mt-4 text-lg lg:text-xl max-w-3xl mx-auto">Mengenal lebih dekat Visi, Misi, dan
                        Struktur Organisasi Kepolisian Resor Tulungagung.</p>
                </div>

            </div>
        </main>

        <section id="visi-misi" class="bg-white py-20">
            <div class="container mx-auto px-6">

                <div class="flex flex-wrap items-center mb-16" data-aos="fade-right">
                    <div class="w-full md:w-1/2 p-4">
                        <img src="{{ asset('assets/images/background.png') }}" alt="Gedung Polres Tulungagung"
                            class="rounded-lg shadow-xl w-full">
                    </div>
                    <div class="w-full md:w-1/2 p-4">
                        <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">Visi</h2>
                        <div class="w-20 h-1 bg-yellow-400 mt-2 mb-4"></div>
                        <p class="text-gray-600 leading-relaxed">
                            Terwujudnya Polri yang profesional, bermoral, modern, unggul dan dapat dipercaya masyarakat
                            Jember guna mendukung terciptanya Indonesia yang berdaulat, mandiri dan berkepribadian yang
                            berlandaskan gotong royong
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap items-start md:flex-row-reverse" data-aos="fade-left">
                    <div class="w-full md:w-1/2 p-4">
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('assets/images/posterkapolres.jpg') }}"
                                alt="Poster Kapolres Tulungagung"
                                class="w-full h-full object-cover rounded-lg shadow-xl">
                            <img src="{{ asset('assets/images/patrolimalam.png') }}" alt="Kegiatan patroli malam"
                                class="w-full h-full object-cover rounded-lg shadow-xl">
                            <img src="{{ asset('assets/images/pemberianpenghargaan.png') }}"
                                alt="Pemberian penghargaan" class="w-full h-full object-cover rounded-lg shadow-xl">
                            <img src="{{ asset('assets/images/pengamanankegiatanmasyarakat.png') }}"
                                alt="Pengamanan kegiatan masyarakat"
                                class="w-full h-full object-cover rounded-lg shadow-xl">
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-4">
                        <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">Misi</h2>
                        <div class="w-20 h-1 bg-yellow-400 mt-2 mb-4"></div>
                        <ol class="list-decimal list-outside pl-5 text-gray-600 space-y-3 leading-relaxed">
                            <li>mewujudkan pemuliaan dan kepercayaan publik (public trust) melalui perlindungan,
                                pengayoman dan pelayanan sampai lini terdepan, dengan konsep “Polres Besar-Polsek Kuat”.
                            </li>
                            <li>mewujudkan pemberdayaan kualitas sumber daya manusia Polres Tulungagung yang profesional
                                dan kompeten, yang menjunjung etika dan sendi-sendi hak asasi manusia;</li>
                            <li>meningkatkan kesejahteraan personel Polres Tulungagung (well motivated dan weelfare);
                            </li>
                            <li>mewujudkan deteksi aksi melalui kegiatan deteksi dini, peringatan dini dan cegah dini
                                secara cepat, akurat dan efektif;</li>
                            <li>mewujudkan pemeliharaan keamanan dan ketertiban masyarakat dengan pemahaman, kesadaran
                                dan kepatuhan hukum melalui strategi Polmas serta membangun sinergi polisional yang
                                proaktif dengan Lembaga/Instansi terkait dan seluruh komponen masyarakat;</li>
                            <li>mewujudkan penegakan hukum yang profesional, transparan, akuntabel, berkeadilan dan
                                menjunjung tinggi HAM serta anti KKN;</li>
                            <li>mewujudkan keamanan, keselamatan, ketertiban dan kelancaran berlalu lintas;</li>
                            <li>mewujudkan keamanan, keselamatan dan ketertiban di kawasan perairan laut dan sungai
                                untuk mendukung visi pembangunan wilayah kemaritiman;</li>
                            <li>mewujudkan pemanfaatan teknologi dan sistem informasi Kepolisian secara berkelanjutan
                                yang terintegrasi di wilayah Tulungagung, yang didukung dengan penelitian dan kajian
                                ilmiah, guna lebih mengoptimalkan kinerja Polri;</li>
                            <li>mewujudkan Intelijen Kepolisian yang profesional dan kompeten untuk memastikan dukungan
                                yang handal bagi keamanan, pencegahan dini kriminalitas dan pengambilan keputusan yang
                                tepat pada kebijakan kemanan;</li>
                        </ol>
                    </div>
                </div>

            </div>
        </section>

        <section id="pejabat-utama" class="bg-white py-20">
            <div class="container mx-auto px-6 text-center" data-aos="fade-up">

                <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">
                    PJU dan Kapolsek Jajaran Polres Tulungagung
                </h2>

                <div class="w-20 h-1 bg-yellow-400 mt-2 mb-4 mx-auto"></div>

                <div class="mt-8">
                    <img src="{{ asset('assets/images/JAJARANKAPOLRES.png') }}"
                        alt="PJU dan Kapolsek Jajaran Polres Tulungagung"
                        class="rounded-lg shadow-xl w-full max-w-6xl mx-auto">
                </div>

            </div>
        </section>

        <section id="struktur-organisasi" class="bg-white py-20">
            <div class="container mx-auto px-6 text-center" data-aos="fade-up">

                <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">
                    Struktur Organisasi Polres Tulungagung
                </h2>

                <div class="w-20 h-1 bg-yellow-400 mt-2 mb-4 mx-auto"></div>

                <div class="mt-8">
                    <img src="{{ asset('assets/images/struktur_organisasi.png') }}"
                        alt="Struktur Organisasi Polres Tulungagung"
                        class="rounded-lg shadow-xl w-full max-w-6xl mx-auto">
                </div>

            </div>
        </section>

        <section id="satuan-kerja" class="bg-gray-100 py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-800 uppercase">Seksi, Bagian, dan Satuan Polres Tulungagung
                    </h2>
                    <div class="w-24 h-1 bg-yellow-400 mx-auto mt-2"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/BAGOPS.jpg') }}" alt="Logo BAGOPS"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">BAG OPS</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Bagian Operasional, membawahi antara lain
                            Satuan Lalu Lintas, Satuan Samapta Bhayangkara, Satuan Intelijen dan Keamanan, dan
                            lain-lain.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'bagops']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/BAGSDM.jpg') }}" alt="Logo BAGSDM"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">BAG SDM</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Bagian Sumber Daya Manusia, mengurusi
                            kepegawaian dan sumber daya manusia di lingkungan Polres.
                        </p>
                        <a href="{{ route('profil.satuan', ['page' => 'bagsdm']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/BAGREN.png') }}" alt="Logo BAGREN"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">BAG REN</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Bagian Perencanaan, bertugas dalam perencanaan
                            program dan anggaran Polres.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'bagren']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SATINTELKAM.png') }}" alt="Logo Satintelkam"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SAT INTELKAM</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Satuan Intelijen dan Keamanan, bertugas dalam
                            pengumpulan informasi dan intelijen.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'satintelkam']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SATRESKRIM.png') }}" alt="Logo SatReskrim"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SAT RESKRIM</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Satuan Reserse Kriminal, bertugas dalam
                            penanganan tindak pidana umum.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'satreskrim']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SATNARKOBA.png') }}" alt="Logo Satnarkoba"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SAT NARKOBA</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Satuan Narkoba, bertugas dalam penanganan kasus
                            narkoba.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'satresnarkoba']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SATLANTAS.png') }}" alt="Logo Satlantas"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SAT LANTAS</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Satuan Lalu Lintas, bertugas dalam pengaturan
                            lalu lintas dan penanganan kecelakaan lalu lintas.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'satlantas']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SATSAMAPTA.png') }}" alt="Logo Samapta"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SAT SAMAPTA</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Satuan Samapta Bhayangkara, bertugas dalam
                            pemeliharaan keamanan dan ketertiban masyarakat.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'satsamapta']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SATBINMAS.png') }}" alt="Logo SatBinmas"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SAT BINMAS</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Satuan Pembinaan Masyarakat, bertugas dalam
                            pembinaan masyarakat.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'satbinmas']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SATTAHTI.png') }}" alt="Logo SatTahti"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SAT TAHTI</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Satuan Tahanan dan Barang Bukti, bertugas dalam
                            pengelolaan tahanan dan barang bukti.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'sattahti']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SIWAS.png') }}" alt="Logo Siwas"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SI WAS</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Seksi Pengawasan, bertugas dalam pengawasan
                            internal.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'siwas']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SIPROPAM.png') }}" alt="Logo SiPropam"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SI PROPAM</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Seksi Profesi dan Pengamanan, bertugas dalam
                            penegakan disiplin dan kode etik.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'sipropam']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SIHUMAS.png') }}" alt="Logo SiHumas"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SI HUMAS</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Seksi Hubungan Masyarakat, bertugas dalam
                            hubungan masyarakat dan publikasi.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'sihumas']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SIKUM.png') }}" alt="Logo SIKUM"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SI KUM</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Seksi Hukum, bertugas dalam bidang hukum.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'sikum']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SITIK.png') }}" alt="Logo SITIK"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SI TIK</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Seksi Teknologi Informasi dan Komunikasi,
                            bertugas dalam bidang teknologi informasi dan komunikasi.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'sitik']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SIUM.png') }}" alt="Logo SIUM"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SIUM</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Seksi Umum, bertugas dalam administrasi umum.
                        </p>
                        <a href="{{ route('profil.satuan', ['page' => 'sium']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SIKEU.png') }}" alt="Logo SIKEU"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SI KEU</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Seksi Keuangan, bertugas dalam pengelolaan
                            keuangan.</p>
                        <a href="{{ route('profil.satuan', ['page' => 'sikeu']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SIDOKKES.png') }}" alt="Logo SIDOKKES"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SI DOKKES</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Seksi Dokkes, bertugas dalam bidang kesehatan.
                        </p>
                        <a href="{{ route('profil.satuan', ['page' => 'sidokkes']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 text-center flex flex-col items-center hover:shadow-xl transition-shadow duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/Logo/SPKT.jpg') }}" alt="Logo SPKT"
                                class="h-41 w-41 object-contain">
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">SPKT</h3>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">Sentra Pelayanan Kepolisian Terpadu, bertugas
                            dalam pelayanan kepolisian terpadu.
                        </p>
                        <a href="{{ route('profil.satuan', ['page' => 'spkt']) }}"
                            class="font-semibold text-yellow-500 hover:text-yellow-600">Selengkapnya</a>
                    </div>

                </div>
            </div>
        </section>
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
    </div>
    {{-- Menambahkan AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800, // durasi animasi dalam ms
            once: false, // apakah animasi hanya terjadi sekali
        });
    </script>
</body>

</html>
