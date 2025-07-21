@extends('admin.layouts.app')

@section('content')
    {{-- Header Selamat Datang --}}
    <div>
        <h1 class="text-2xl font-bold text-white">Selamat Datang, {{ auth()->user()->name }}</h1>
        <p class="text-gray-400 mt-1">Ringkasan aktivitas website Polres Tulungagung.</p>
    </div>

    {{-- Kartu Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
        <div class="bg-gray-900/50 p-6 rounded-lg flex items-center space-x-4">
            <div class="bg-blue-500/10 text-blue-400 rounded-lg p-3">
                <span class="material-symbols-outlined">article</span>
            </div>
            <div>
                <p class="text-sm text-gray-400">Total Berita</p>
                <p class="text-2xl font-bold text-white">{{ $totalBerita }}</p>
            </div>
        </div>
        <div class="bg-gray-900/50 p-6 rounded-lg flex items-center space-x-4">
            <div class="bg-yellow-500/10 text-yellow-400 rounded-lg p-3">
                <span class="material-symbols-outlined">photo_library</span>
            </div>
            <div>
                <p class="text-sm text-gray-400">Total Gambar Galeri</p>
                <p class="text-2xl font-bold text-white">{{ $totalGaleri }}</p>
            </div>
        </div>
        <div class="bg-gray-900/50 p-6 rounded-lg flex items-center space-x-4">
            <div class="bg-green-500/10 text-green-400 rounded-lg p-3">
                <span class="material-symbols-outlined">visibility</span>
            </div>
            <div>
                <p class="text-sm text-gray-400">Total Pengunjung Website</p>
                <p class="text-2xl font-bold text-white">{{ $totalPengunjung }}</p>
            </div>
        </div>
    </div>

    {{-- Konten Terbaru --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        {{-- Berita Terbaru --}}
        <div class="bg-gray-900/50 p-6 rounded-lg">
            <h2 class="font-semibold text-white mb-4 border-b border-gray-700 pb-3">Berita Terbaru</h2>
            <div class="space-y-4">
                @forelse($beritaTerbaru as $berita)
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('storage/' . $berita->image) }}"
                            class="w-16 h-16 object-cover rounded-md flex-shrink-0" alt="{{ $berita->title }}">
                        <div>
                            <p class="text-sm font-semibold text-gray-200 hover:text-yellow-400 transition line-clamp-2">
                                {{ $berita->title }}</p>
                            <p class="text-xs text-gray-500">{{ $berita->published_at->format('d M Y') }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm py-4 text-center">Belum ada berita yang ditambahkan.</p>
                @endforelse
            </div>
        </div>

        {{-- Galeri Terbaru --}}
        <div class="bg-gray-900/50 p-6 rounded-lg">
            <h2 class="font-semibold text-white mb-4 border-b border-gray-700 pb-3">Galeri Terbaru</h2>
            @if ($galeriTerbaru->isEmpty())
                <p class="text-gray-500 text-sm py-4 text-center">Belum ada gambar yang ditambahkan.</p>
            @else
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($galeriTerbaru as $gallery)
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                            class="w-full h-24 object-cover rounded-md">
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
