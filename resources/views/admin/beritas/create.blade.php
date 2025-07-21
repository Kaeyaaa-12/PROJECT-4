@extends('admin.layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-white">Tambah Berita Baru</h1>
            <p class="text-gray-400 mt-1">Buat artikel berita baru untuk ditampilkan di halaman utama.</p>
        </div>
        <a href="{{ route('admin.beritas.index') }}"
            class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 transition">
            &larr; Kembali
        </a>
    </div>

    <div class="bg-gray-900/50 rounded-lg shadow-lg p-6 lg:p-8">
        <form action="{{ route('admin.beritas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-300">Judul Berita</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                        placeholder="Masukkan judul berita..." required>
                    @error('title')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="published_at" class="block mb-2 text-sm font-medium text-gray-300">Tanggal Publikasi</label>
                    <input type="date" id="published_at" name="published_at"
                        value="{{ old('published_at', date('Y-m-d')) }}"
                        class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                        required>
                    @error('published_at')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="link" class="block mb-2 text-sm font-medium text-gray-300">Link</label>
                    <input type="url" id="link" name="link" value="{{ old('link') }}"
                        class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                        placeholder="https://www.instagram.com/p/...">
                    @error('link')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-300">File Gambar</label>
                    <input id="image"
                        class="block w-full text-sm text-gray-400 border border-gray-600 rounded-lg cursor-pointer bg-gray-700 focus:outline-none file:bg-yellow-500 file:border-0 file:text-black file:font-semibold file:px-4 file:py-2 file:mr-4 hover:file:bg-yellow-400"
                        type="file" name="image" required>
                    <p class="mt-1 text-xs text-gray-400">Ukuran ideal: 800x500 piksel untuk berita utama, 300x200 untuk
                        berita kecil.</p>
                    @error('image')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-yellow-400 transition">
                        Unggah Berita
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
