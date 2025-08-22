@extends('profil.layout')

@section('title', 'Seksi Profesi dan Pengamanan (Sipropam)')
@section('page-title', 'Seksi Profesi dan Pengamanan (Sipropam)')

@section('content')
    <div class="text-center mb-8 -mt-4">
        <img src="{{ asset('assets/images/Logo/SIPROPAM.png') }}" alt="Logo Sipropam" class="h-56 mx-auto object-contain">
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Definisi</h2>
    <p class="text-gray-700 leading-relaxed mb-8">
        Seksi Profesi dan Pengamanan (Sipropam) adalah unsur pengawas di bawah Kapolres. Sipropam bertugas melaksanakan
        pengawasan terhadap pembinaan disiplin, pengamanan internal, pertanggungjawaban profesi, dan pelayanan pengaduan
        masyarakat terkait dugaan penyimpangan oleh pegawai negeri pada Polri.
    </p>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Tugas Pokok</h2>
    <ul class="list-disc list-inside space-y-3 text-gray-700 leading-relaxed">
        <li>Memberikan pelayanan, pengendalian, dan pemantauan terhadap pengaduan masyarakat tentang penyimpangan perilaku
            dan tindakan pegawai Polri.</li>
        <li>Melaksanakan pembinaan dan pengamanan internal yang meliputi personel, materiil, kegiatan, dan bahan keterangan.
        </li>
        <li>Melakukan pembinaan dan penegakan disiplin dan/atau kode etik profesi Polri.</li>
        <li>Melaksanakan pembinaan profesi yang meliputi pembinaan etika, audit investigasi, dan penegakan etika profesi
            Polri.</li>
    </ul>
@endsection
