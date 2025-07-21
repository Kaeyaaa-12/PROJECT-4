@extends('admin.layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-white">Edit Gambar</h1>
            <p class="text-gray-400 mt-1">Perbarui informasi gambar galeri.</p>
        </div>
        <a href="{{ route('admin.galleries.index') }}"
            class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 transition">
            &larr; Kembali
        </a>
    </div>

    <div class="bg-gray-900/50 rounded-lg shadow-lg p-6 lg:p-8">
        <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-300">Judul Gambar</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $gallery->title) }}"
                        class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5"
                        required>
                    @error('title')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-300">File Gambar
                        (Opsional)</label>
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                            class="w-48 h-32 object-cover rounded mb-4 border border-gray-600">
                    </div>
                    <input id="image"
                        class="block w-full text-sm text-gray-400 border border-gray-600 rounded-lg cursor-pointer bg-gray-700 focus:outline-none file:bg-yellow-500 file:border-0 file:text-black file:font-semibold file:px-4 file:py-2 file:mr-4 hover:file:bg-yellow-400"
                        type="file" name="image">
                    <p class="mt-1 text-xs text-gray-400">Kosongkan jika tidak ingin mengubah gambar.</p>
                    @error('image')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-yellow-400 transition">
                        Perbarui Gambar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
