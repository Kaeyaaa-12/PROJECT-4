@extends('profil.layout')

@section('title', 'Seksi Keuangan (SIKEU)')
@section('page-title', 'Seksi Keuangan (SIKEU)')

@section('content')
    <div class="text-center mb-8 -mt-4">
        <img src="{{ asset('assets/images/Logo/SIKEU.png') }}" alt="Logo SIKEU" class="h-56 mx-auto object-contain">
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Definisi</h2>
    <p class="text-gray-700 leading-relaxed mb-8">
        Seksi Keuangan (SIKEU) adalah unsur pendukung yang berada di bawah Kapolres. SIKEU bertugas melaksanakan pelayanan
        fungsi keuangan yang meliputi pembiayaan, pengendalian, pembukuan, akuntansi dan verifikasi, serta pelaporan
        pertanggungjawaban keuangan di lingkungan Polres.
    </p>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Tugas Pokok</h2>
    <ul class="list-disc list-inside space-y-3 text-gray-700 leading-relaxed">
        <li>Melaksanakan pelayanan administrasi keuangan, yang mencakup kegiatan pembiayaan, pengendalian, pembukuan, dan
            akuntansi.</li>
        <li>Melakukan verifikasi dan memastikan kesesuaian dokumen pertanggungjawaban keuangan.</li>
        <li>Melaksanakan pembayaran gaji dan hak-hak keuangan lainnya untuk pegawai negeri pada Polri di lingkungan Polres.
        </li>
        <li>Menyusun laporan sistem akuntansi instansi (SAI) serta laporan pertanggungjawaban keuangan secara berkala.</li>
        <li>Memberikan petunjuk teknis dan arahan di bidang pengelolaan keuangan kepada seluruh satuan kerja di Polres.</li>
    </ul>
@endsection
