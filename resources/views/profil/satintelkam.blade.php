@extends('profil.layout')

@section('title', 'Satuan Intelijen Keamanan (Satintelkam)')
@section('page-title', 'Satuan Intelijen Keamanan (Satintelkam)')

@section('content')
    <div class="text-center mb-8 -mt-4">
        <img src="{{ asset('assets/images/Logo/SATINTELKAM.png') }}" alt="Logo Satintelkam"
            class="h-56 mx-auto object-contain">
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Definisi</h2>
    <p class="text-gray-700 leading-relaxed mb-8">
        Satuan Intelijen Keamanan (Satintelkam) adalah unsur pelaksana tugas pokok yang berada di bawah Kapolres.
        Satintelkam bertugas menyelenggarakan dan membina fungsi intelijen keamanan, mengumpulkan dan mengolah data, serta
        memberikan pelayanan yang berkaitan dengan izin keramaian, penerbitan Surat Keterangan Catatan Kepolisian (SKCK),
        dan rekomendasi izin senjata api.
    </p>

    <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-yellow-400 pb-2 mb-4">Tugas Pokok</h2>
    <ul class="list-disc list-inside space-y-3 text-gray-700 leading-relaxed">
        <li>Melaksanakan pembinaan kegiatan intelijen keamanan.</li>
        <li>Menyelenggarakan kegiatan operasional intelijen keamanan untuk deteksi dini (early detection) dan peringatan
            dini (early warning).</li>
        <li>Mengumpulkan, menyimpan, dan memutakhirkan biodata tokoh formal dan informal.</li>
        <li>Menganalisis perkembangan lingkungan strategis serta menyusun produk intelijen untuk mendukung kegiatan Polres.
        </li>
        <li>Menyusun prakiraan intelijen keamanan dan menyajikan hasil analisis.</li>
        <li>Memberikan pelayanan surat izin untuk kegiatan keramaian umum, Surat Tanda Terima Pemberitahuan (STTP), SKCK,
            dan rekomendasi penggunaan senjata api dan bahan peledak.</li>
    </ul>
@endsection
