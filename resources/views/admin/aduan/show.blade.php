@extends('admin.layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-white">Detail Laporan Aduan</h1>
            <p class="text-gray-400 mt-1">Rincian lengkap dari laporan yang diterima.</p>
        </div>
        <a href="{{ route('admin.aduan.index') }}"
            class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 transition">
            &larr; Kembali ke Daftar Aduan
        </a>
    </div>

    <div class="bg-gray-900/50 rounded-lg shadow-lg p-6 lg:p-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
            <div class="md:col-span-2 space-y-4">
                <div>
                    <h3 class="font-semibold text-gray-400">Nama Pelapor:</h3>
                    <p class="text-white">{{ $aduan->nama }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-400">Jenis Aduan:</h3>
                    <p class="text-white">{{ $aduan->jenis_aduan }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-400">Waktu Kejadian:</h3>
                    <p class="text-white">{{ $aduan->waktu_kejadian->format('d M Y, H:i') }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-400">Waktu Laporan Dibuat:</h3>
                    <p class="text-white">{{ $aduan->created_at->format('d M Y, H:i') }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-400">Lokasi Kejadian:</h3>
                    <p class="text-white">{{ $aduan->lokasi_kejadian }}</p>
                </div>
            </div>
            <div class="md:col-span-1">
                <div>
                    <h3 class="font-semibold text-gray-400 mb-2">Status Laporan:</h3>
                    <form action="{{ route('admin.aduan.updateStatus', $aduan->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="status" onchange="this.form.submit()"
                            class="bg-gray-700 border-gray-600 text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5">
                            <option value="Baru" @if ($aduan->status == 'Baru') selected @endif>Baru</option>
                            <option value="Dalam Proses" @if ($aduan->status == 'Dalam Proses') selected @endif>Dalam Proses
                            </option>
                            <option value="Selesai" @if ($aduan->status == 'Selesai') selected @endif>Selesai</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-6 pt-6 border-t border-gray-700">
            <h3 class="font-semibold text-gray-400">Isi Laporan / Kronologi:</h3>
            <p class="text-white mt-2 whitespace-pre-wrap">{{ $aduan->isi_laporan }}</p>
        </div>

        @if ($aduan->bukti)
            <div class="mt-6 pt-6 border-t border-gray-700">
                <h3 class="font-semibold text-gray-400">Bukti Terlampir:</h3>
                <div class="mt-2">
                    @php $extension = pathinfo($aduan->bukti, PATHINFO_EXTENSION); @endphp
                    @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                        <img src="{{ asset('storage/' . $aduan->bukti) }}" alt="Bukti Aduan"
                            class="max-w-md rounded-lg border border-gray-600">
                    @else
                        <a href="{{ asset('storage/' . $aduan->bukti) }}" target="_blank"
                            class="inline-flex items-center px-4 py-2 bg-yellow-500 text-black rounded-md hover:bg-yellow-600">
                            <span class="material-symbols-outlined mr-2">download</span>
                            Lihat/Unduh Bukti (PDF)
                        </a>
                    @endif
                </div>
            </div>
        @endif
    </div>
@endsection
