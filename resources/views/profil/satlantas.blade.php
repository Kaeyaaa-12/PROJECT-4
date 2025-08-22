@extends('profil.layout')

@section('title', 'Satuan Lalu Lintas (Satlantas)')
@section('page-title', 'Satuan Lalu Lintas (Satlantas)')

@section('content')
    <div class="text-center mb-8 -mt-4">
        <img src="{{ asset('assets/images/Logo/SATLANTAS.png') }}" alt="Logo Satlantas" class="h-56 mx-auto object-contain">
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Definisi</h2>
    <p class="text-gray-700 leading-relaxed mb-8">
        Satuan Lalu Lintas (Satlantas) adalah unsur pelaksana tugas pokok di bawah Kapolres. Satlantas bertugas melaksanakan
        pengaturan, penjagaan, pengawalan dan patroli lalu lintas, pelayanan registrasi dan identifikasi (Regident)
        kendaraan bermotor dan pengemudi, serta penegakan hukum di bidang lalu lintas.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Tugas Pokok</h2>
    <ul class="list-disc list-inside space-y-3 text-gray-700 leading-relaxed">
        <li>Menyelenggarakan pendidikan masyarakat lalu lintas (Dikmas Lantas) dan rekayasa lalu lintas.</li>
        <li>Melaksanakan penegakan hukum meliputi penyidikan kecelakaan lalu lintas dan penanganan pelanggaran lalu lintas.
        </li>
        <li>Memberikan pelayanan administrasi Regident kendaraan bermotor dan pengemudi (SIM, STNK, BPKB).</li>
        <li>Menyelenggarakan kegiatan pengaturan, penjagaan, pengawalan dan patroli (Turjawali) lalu lintas.</li>
        <li>Melakukan pembinaan manajemen operasional, pelatihan, dan pengembangan sistem teknologi informasi lalu lintas.
        </li>
    </ul>
@endsection
