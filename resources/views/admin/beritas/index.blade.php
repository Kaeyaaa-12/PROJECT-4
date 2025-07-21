@extends('admin.layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-white">Manajemen Berita</h1>
            <p class="text-gray-400 mt-1">Kelola semua artikel berita di sini.</p>
        </div>
        <a href="{{ route('admin.beritas.create') }}"
            class="inline-flex items-center px-4 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:border-yellow-700 focus:ring ring-yellow-300 disabled:opacity-25 transition ease-in-out duration-150">
            <span class="material-symbols-outlined text-base mr-2">add</span>
            Tambah Berita
        </a>
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
                        <th scope="col" class="px-6 py-4">Gambar</th>
                        <th scope="col" class="px-6 py-4">Judul Berita</th>
                        <th scope="col" class="px-6 py-4">Tanggal Publikasi</th>
                        <th scope="col" class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($beritas as $berita)
                        <tr class="border-b border-gray-800 hover:bg-gray-800/50">
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}"
                                    class="w-28 h-[72px] object-cover rounded">
                            </td>
                            <td class="px-6 py-4 font-medium text-white whitespace-nowrap max-w-sm truncate">
                                {{ $berita->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $berita->published_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end space-x-4">
                                    <a href="{{ route('admin.beritas.edit', $berita->id) }}"
                                        class="font-medium text-yellow-400 hover:underline">Edit</a>
                                    <form action="{{ route('admin.beritas.destroy', $berita->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="border-b border-gray-800">
                            <td colspan="4" class="px-6 py-16 text-center text-gray-500">
                                Tidak ada berita.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
