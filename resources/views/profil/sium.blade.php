@extends('profil.layout')

@section('title', 'Seksi Umum (SIUM)')
@section('page-title', 'Seksi Umum (SIUM)')

@section('content')
    <div class="text-center mb-8 -mt-4">
        <img src="{{ asset('assets/images/Logo/SIUM.png') }}" alt="Logo SIUM" class="h-56 mx-auto object-contain">
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Definisi</h2>
    <p class="text-gray-700 leading-relaxed mb-8">
        Seksi Umum (SIUM) adalah unsur pembantu pimpinan yang berada di bawah Kapolres. SIUM bertugas melaksanakan fungsi
        pelayanan dan pembinaan administrasi umum, ketatausahaan, serta pelayanan markas di lingkungan Polres.
    </p>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Tugas Pokok</h2>
    <ul class="list-disc list-inside space-y-3 text-gray-700 leading-relaxed">
        <li>Melaksanakan pelayanan dan pembinaan administrasi umum dan ketatausahaan, meliputi kesekretariatan, kearsipan,
            dan perpustakaan.</li>
        <li>Memberikan pelayanan pembinaan naskah dinas, termasuk surat-menyurat dan pendistribusiannya.</li>
        <li>Melaksanakan pelayanan markas, seperti penyiapan fasilitas kantor, ruang rapat, dan akomodasi angkutan.</li>
        <li>Mengatur urusan dalam yang berkaitan dengan protokoler untuk upacara, pemakaman, dan acara dinas lainnya di
            lingkungan Polres.</li>
    </ul>
@endsection
