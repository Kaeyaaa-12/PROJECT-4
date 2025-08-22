@extends('profil.layout')

@section('title', 'Seksi Hukum (SIKUM)')
@section('page-title', 'Seksi Hukum (SIKUM)')

@section('content')
    <div class="text-center mb-8 -mt-4">
        <img src="{{ asset('assets/images/Logo/SIKUM.png') }}" alt="Logo SIKUM" class="h-56 mx-auto object-contain">
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Definisi</h2>
    <p class="text-gray-700 leading-relaxed mb-8">
        Seksi Hukum (SIKUM) adalah unsur pembantu pimpinan yang berada di bawah Kapolres. SIKUM bertugas melaksanakan
        pelayanan bantuan hukum, memberikan pendapat dan saran hukum, serta melaksanakan penyuluhan hukum kepada internal
        maupun eksternal.
    </p>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Tugas Pokok</h2>
    <ul class="list-disc list-inside space-y-3 text-gray-700 leading-relaxed">
        <li>Memberikan pelayanan bantuan hukum kepada kesatuan dan personel Polres beserta keluarganya yang menghadapi
            masalah hukum.</li>
        <li>Memberikan pendapat serta saran hukum atas permasalahan hukum yang dihadapi oleh dinas maupun anggota Polri.
        </li>
        <li>Turut serta dalam pembinaan dan pengembangan hukum, termasuk penyusunan peraturan di tingkat Polres.</li>
        <li>Melaksanakan penyuluhan hukum kepada personel Polres dan masyarakat untuk meningkatkan kesadaran hukum.</li>
        <li>Mendokumentasikan dan menganalisis produk hukum serta yurisprudensi yang berkaitan dengan tugas kepolisian.</li>
    </ul>
@endsection
