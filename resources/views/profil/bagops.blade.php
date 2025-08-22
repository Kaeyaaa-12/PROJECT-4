@extends('profil.layout')

@section('title', 'Bagian Operasi (Bagops)')
@section('page-title', 'Bagian Operasi (Bagops)')

@section('content')
    <div class="text-center mb-8 -mt-4">
        <img src="{{ asset('assets/images/Logo/BAGOPS.jpg') }}" alt="Logo Bagops" class="h-56 mx-auto object-contain">
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Definisi</h2>
    <p class="text-gray-700 leading-relaxed mb-8">
        Bagian Operasi (Bagops) adalah unsur pengawas dan pembantu pimpinan yang berada di bawah Kapolres. Bagops bertugas
        merencanakan, mengoordinasikan, melaksanakan dan mengendalikan manajemen operasi kepolisian, kegiatan kepolisian
        terpadu, serta pengamanan kegiatan masyarakat dan/atau instansi pemerintah.
    </p>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Tugas Pokok</h2>
    <ul class="list-disc list-inside space-y-3 text-gray-700 leading-relaxed">
        <li>Menyiapkan administrasi dan pelaksanaan operasi kepolisian dan kegiatan kepolisian terpadu.</li>
        <li>Merencanakan pelaksanaan pelatihan praoperasi, termasuk kerja sama dan pelatihan dalam rangka operasi
            kepolisian.</li>
        <li>Merencanakan dan mengendalikan operasi kepolisian, termasuk pengumpulan, pengolahan, penyajian, serta pelaporan
            data operasi dan pengamanan.</li>
        <li>Melakukan pembinaan manajemen operasi kepolisian yang meliputi perencanaan, administrasi, dan pengendalian
            operasi.</li>
        <li>Mengoordinasikan dan mengendalikan pelaksanaan pengamanan markas.</li>
        <li>Mengoordinasikan dan melaksanakan kerja sama dengan lembaga pemerintah/nonpemerintah serta melakukan monitoring
            dan evaluasi.</li>
    </ul>
@endsection
