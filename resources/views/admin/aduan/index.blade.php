@extends('admin.layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-white">Manajemen Laporan Aduan</h1>
            <p class="text-gray-400 mt-1">Kelola semua laporan aduan yang masuk dari masyarakat.</p>
        </div>
    </div>

    @if (session('success'))
        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
            role="alert">
            <span class="font-medium">Sukses!</span> {{ session('success') }}
        </div>
    @endif

    <div class="bg-gray-900/50 rounded-lg shadow-lg">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs text-gray-300 uppercase bg-gray-900/70">
                    <tr>
                        <th scope="col" class="px-6 py-4">Waktu Lapor</th>
                        <th scope="col" class="px-6 py-4">Pelapor</th>
                        <th scope="col" class="px-6 py-4">Jenis Aduan</th>
                        <th scope="col" class="px-6 py-4">Status</th>
                        <th scope="col" class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($aduans as $aduan)
                        <tr class="border-b border-gray-800 hover:bg-gray-800/50">
                            <td class="px-6 py-4">{{ $aduan->created_at->format('d M Y, H:i') }}</td>
                            <td class="px-6 py-4 font-medium text-white">{{ $aduan->nama }}</td>
                            <td class="px-6 py-4">{{ $aduan->jenis_aduan }}</td>
                            <td class="px-6 py-4">
                                <form action="{{ route('admin.aduan.updateStatus', $aduan->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()"
                                        class="bg-gray-700 border-gray-600 text-white text-xs rounded focus:ring-yellow-500 focus:border-yellow-500">
                                        <option value="Baru" @if ($aduan->status == 'Baru') selected @endif>Baru
                                        </option>
                                        <option value="Dalam Proses" @if ($aduan->status == 'Dalam Proses') selected @endif>Dalam
                                            Proses</option>
                                        <option value="Selesai" @if ($aduan->status == 'Selesai') selected @endif>Selesai
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end space-x-4">
                                    <a href="{{ route('admin.aduan.show', $aduan->id) }}"
                                        class="font-medium text-yellow-400 hover:underline">Detail</a>
                                    <form action="{{ route('admin.aduan.destroy', $aduan->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus aduan ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center text-gray-500">Tidak ada data aduan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-6">
            {{ $aduans->links() }}
        </div>
    </div>
@endsection
