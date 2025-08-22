@extends('profil.layout')

@section('title', 'Satuan Reserse Kriminal (Satreskrim)')
@section('page-title', 'Satuan Reserse Kriminal (Satreskrim)')

@section('content')
    <div class="text-center mb-8 -mt-4">
        <img src="{{ asset('assets/images/Logo/SATRESKRIM.png') }}" alt="Logo Satreskrim" class="h-56 mx-auto object-contain">
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Definisi</h2>
    <p class="text-gray-700 leading-relaxed mb-8">
        Satuan Reserse Kriminal (Satreskrim) adalah unsur pelaksana tugas pokok yang berada di bawah Kapolres. Satreskrim
        bertugas melaksanakan penyelidikan, penyidikan, dan pengawasan penyidikan tindak pidana, termasuk fungsi
        identifikasi dan laboratorium forensik lapangan, serta pembinaan, koordinasi, dan pengawasan penyidik pegawai negeri
        sipil (PPNS).
    </p>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Tugas Pokok</h2>
    <ul class="list-disc list-inside space-y-3 text-gray-700 leading-relaxed">
        <li>Melakukan pembinaan teknis administrasi penyelidikan dan penyidikan.</li>
        <li>Memberikan pelayanan dan perlindungan khusus kepada remaja, anak, dan wanita baik sebagai pelaku maupun korban.
        </li>
        <li>Melaksanakan identifikasi untuk kepentingan penyidikan dan pelayanan umum.</li>
        <li>Menganalisis kasus dan mengkaji efektivitas pelaksanaan tugas Satreskrim.</li>
        <li>Melaksanakan pengawasan penyidikan tindak pidana di tingkat Polsek dan Polres.</li>
        <li>Membina, mengoordinasikan, dan mengawasi PPNS.</li>
        <li>Menyelidiki dan menyidik tindak pidana umum dan khusus (ekonomi, korupsi, dll.).</li>
    </ul>
@endsection
