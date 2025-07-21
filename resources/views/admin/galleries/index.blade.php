@extends('admin.layouts.app')

@section('content')
    {{-- Header Halaman --}}
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-white">Manajemen Galeri</h1>
            <p class="text-gray-400 mt-1">Kelola semua gambar galeri di sini.</p>
        </div>
        @if ($galleries->count() < 8)
            <a href="{{ route('admin.galleries.create') }}"
                class="inline-flex items-center px-4 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-700 focus:ring ring-yellow-300 disabled:opacity-25 transition ease-in-out duration-150">
                <span class="material-symbols-outlined text-base mr-2">add_photo_alternate</span>
                Tambah Gambar
            </a>
        @endif
    </div>

    {{-- Pesan Sukses atau Gagal --}}
    @if (session('success'))
        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
            role="alert">
            <span class="font-medium">Sukses!</span> {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Gagal!</span> {{ session('error') }}
        </div>
    @endif

    {{-- Kontainer Tabel --}}
    <div class="bg-gray-900/50 rounded-lg shadow-lg">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs text-gray-300 uppercase bg-gray-900/70">
                    <tr>
                        <th scope="col" class="px-6 py-4">Gambar</th>
                        <th scope="col" class="px-6 py-4">Judul</th>
                        <th scope="col" class="px-6 py-4">Tanggal Unggah</th>
                        <th scope="col" class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($galleries as $gallery)
                        <tr class="border-b border-gray-800 hover:bg-gray-800/50">
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                    class="w-28 h-[72px] object-cover rounded">
                            </td>
                            <td class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{ $gallery->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $gallery->created_at->format('d M Y, H:i') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end space-x-4">
                                    <a href="{{ route('admin.galleries.edit', $gallery->id) }}"
                                        class="font-medium text-yellow-400 hover:underline">Edit</a>
                                    <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        {{-- Tampilan saat tabel kosong --}}
                        <tr class="border-b border-gray-800">
                            <td colspan="4" class="px-6 py-16 text-center text-gray-500">
                                Tidak ada gambar di galeri.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
