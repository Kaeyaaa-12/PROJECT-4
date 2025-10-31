@extends('admin.layouts.app')

@section('title', 'Peta Sebaran Aduan')

{{-- 1. PUSH CSS LEAFLET KE HEAD --}}
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map-admin {
            /* **PERBAIKAN KRITIS: Pastikan ketinggian (height) terdefinisi** */
            height: 600px;
            width: 100%;
            border-radius: 0.5rem;
            /* Z-index 0 untuk mencegah konflik dengan elemen UI admin */
            z-index: 0;
        }
    </style>
@endpush

@section('content')
    <div class="p-6">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">🗺️ Peta Sebaran Laporan Aduan</h1>
        <p class="text-gray-600 mb-4">Marker diklasifikasikan berdasarkan status laporan (Merah: Baru, Oranye: Dalam Proses,
            Hijau: Selesai).</p>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            {{-- DIV TEMPAT PETA HARUS ADA DI SINI --}}
            <div id="map-admin"></div>
        </div>
    </div>
@endsection

{{-- 2. PUSH JAVASCRIPT LEAFLET KE BAWAH BODY --}}
@push('scripts')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Default center: Polres Tulungagung
            const defaultPos = [-8.0673, 111.9004];

            const map = L.map('map-admin').setView(defaultPos, 13);

            // Tambahkan layer OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            const aduanData = @json($aduans);
            const markers = [];

            aduanData.forEach(aduan => {
                if (aduan.latitude && aduan.longitude) {
                    const latLng = [parseFloat(aduan.latitude), parseFloat(aduan.longitude)];

                    const waktuKejadian = new Date(aduan.waktu_kejadian).toLocaleString('id-ID', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    });

                    let circleColor = '#ef4444'; // Merah (Baru)
                    let statusClass = 'text-red-600';
                    if (aduan.status === 'Dalam Proses') {
                        circleColor = '#f97316'; // Oranye
                        statusClass = 'text-orange-500';
                    } else if (aduan.status === 'Selesai') {
                        circleColor = '#10b981'; // Hijau
                        statusClass = 'text-green-600';
                    }

                    const circleMarker = L.circleMarker(latLng, {
                        radius: 8,
                        fillColor: circleColor,
                        color: "#000",
                        weight: 1,
                        opacity: 1,
                        fillOpacity: 0.8
                    }).addTo(map);

                    const contentString = `
                        <div class="p-1 w-72">
                            <h3 class="font-bold text-base mb-1">${aduan.nama}</h3>
                            <p class="text-gray-700 text-sm"><strong>Jenis Aduan:</strong> ${aduan.jenis_aduan}</p>
                            <p class="text-gray-700 text-sm"><strong>Waktu:</strong> ${waktuKejadian}</p>
                            <p class="text-gray-700 text-sm"><strong>Status:</strong>
                                <span class="font-semibold \${statusClass}">
                                    ${aduan.status}
                                </span>
                            </p>
                            <p class="text-gray-700 text-sm mt-1"><strong>Lokasi:</strong> ${aduan.lokasi_kejadian}</p>

                            <div class="mt-3 text-right">
                                <a href="https://www.openstreetmap.org/?mlat=\${aduan.latitude}&mlon=\${aduan.longitude}#map=16/\${aduan.latitude}/\${aduan.longitude}" target="_blank" class="text-blue-500 hover:text-blue-700 text-sm font-medium">Lihat di OSM »</a>
                                <a href="{{ url('admin/aduan') }}/\${aduan.id}" target="_blank" class="text-yellow-500 hover:text-yellow-700 text-sm font-medium ml-2">Lihat Detail »</a>
                            </div>
                        </div>
                    `;

                    circleMarker.bindPopup(contentString);
                    markers.push(circleMarker);
                }
            });

            // Mengatasi masalah ukuran peta tidak terdeteksi:
            // Panggil invalidateSize() setelah inisialisasi untuk memastikan peta menyesuaikan ke ukuran container.
            map.invalidateSize();

            if (markers.length > 0) {
                const group = new L.featureGroup(markers);
                map.fitBounds(group.getBounds().pad(0.5));
            } else {
                map.setView(defaultPos, 13);
            }

            if (aduanData.length === 1 && aduanData[0].latitude && aduanData[0].longitude) {
                map.setView([parseFloat(aduanData[0].latitude), parseFloat(aduanData[0].longitude)], 15);
            }
        });
    </script>
@endpush
