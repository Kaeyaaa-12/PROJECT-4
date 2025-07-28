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

    {{-- Aduan Masuk Terbaru --}}
    <div class="mt-8 bg-gray-900/50 rounded-lg shadow-lg">
        <div class="p-6 border-b border-gray-700">
            <h2 class="font-semibold text-white">Daftar Aduan Masuk Terbaru</h2>
            <p class="text-sm text-gray-400 mt-1">Menampilkan 5 laporan aduan terbaru yang masuk.</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs text-gray-300 uppercase bg-gray-900/70">
                    <tr>
                        <th scope="col" class="px-6 py-3">Pelapor</th>
                        <th scope="col" class="px-6 py-3">Jenis Aduan</th>
                        <th scope="col" class="px-6 py-3">Waktu Lapor</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($aduanTerbaru as $aduan)
                        <tr class="border-b border-gray-800 hover:bg-gray-800/50">
                            <td class="px-6 py-4 font-medium text-white whitespace-nowrap">{{ $aduan->nama }}</td>
                            <td class="px-6 py-4">{{ $aduan->jenis_aduan }}</td>
                            <td class="px-6 py-4">{{ $aduan->created_at->diffForHumans() }}</td>
                            <td class="px-6 py-4">
                                @if ($aduan->status == 'Baru')
                                    <span
                                        class="px-2 py-1 text-xs font-medium text-blue-300 bg-blue-900/50 rounded-full">{{ $aduan->status }}</span>
                                @elseif($aduan->status == 'Dalam Proses')
                                    <span
                                        class="px-2 py-1 text-xs font-medium text-yellow-300 bg-yellow-900/50 rounded-full">{{ $aduan->status }}</span>
                                @else
                                    <span
                                        class="px-2 py-1 text-xs font-medium text-green-300 bg-green-900/50 rounded-full">{{ $aduan->status }}</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-gray-500">Belum ada aduan yang masuk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Grafik Aduan --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        <div class="bg-gray-900/50 p-6 rounded-lg">
            <h2 class="font-semibold text-white mb-4">Grafik Aduan Bulan Ini (%)</h2>
            <canvas id="chartBulanIni"></canvas>
        </div>
        <div class="bg-gray-900/50 p-6 rounded-lg">
            <h2 class="font-semibold text-white mb-4">Grafik Aduan Keseluruhan (%)</h2>
            <canvas id="chartKeseluruhan"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data untuk chart bulan ini
            const dataBulanIni = {
                labels: @json($chartBulanIniLabels),
                datasets: [{
                    label: 'Persentase Aduan Bulan Ini',
                    data: @json($chartBulanIniData),
                    backgroundColor: 'rgba(250, 204, 21, 0.6)',
                    borderColor: 'rgba(250, 204, 21, 1)',
                    borderWidth: 1
                }]
            };

            // Data untuk chart keseluruhan
            const dataKeseluruhan = {
                labels: @json($chartKeseluruhanLabels),
                datasets: [{
                    label: 'Persentase Aduan Keseluruhan',
                    data: @json($chartKeseluruhanData),
                    backgroundColor: 'rgba(59, 130, 246, 0.6)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#9ca3af',
                                callback: function(value) {
                                    return value + '%'
                                }
                            },
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            }
                        },
                        x: {
                            ticks: {
                                color: '#9ca3af'
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            };

            // Inisialisasi Chart Bulan Ini
            new Chart(
                document.getElementById('chartBulanIni'), {
                    ...config,
                    data: dataBulanIni
                }
            );

            // Inisialisasi Chart Keseluruhan
            new Chart(
                document.getElementById('chartKeseluruhan'), {
                    ...config,
                    data: dataKeseluruhan
                }
            );
        });
    </script>
@endsection
