<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aduan;
use App\Models\Berita;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Data Statistik Utama
        $totalBerita = Berita::count();
        $totalGaleri = Gallery::count();
        $totalPengunjung = 0; // Dummy data

        // Data Aduan Terbaru untuk Tabel
        $aduanTerbaru = Aduan::latest()->take(5)->get();

        // Data untuk Grafik Aduan Bulan Ini
        $aduanBulanIni = Aduan::whereMonth('created_at', now()->month)
            ->select('jenis_aduan', DB::raw('count(*) as total'))
            ->groupBy('jenis_aduan')
            ->pluck('total', 'jenis_aduan');

        $totalAduanBulanIni = $aduanBulanIni->sum();
        $chartBulanIniLabels = $aduanBulanIni->keys();
        $chartBulanIniData = $aduanBulanIni->map(function ($total) use ($totalAduanBulanIni) {
            return $totalAduanBulanIni > 0 ? round(($total / $totalAduanBulanIni) * 100, 2) : 0;
        });

        // Data untuk Grafik Aduan Keseluruhan
        $aduanKeseluruhan = Aduan::select('jenis_aduan', DB::raw('count(*) as total'))
            ->groupBy('jenis_aduan')
            ->pluck('total', 'jenis_aduan');

        $totalAduanKeseluruhan = $aduanKeseluruhan->sum();
        $chartKeseluruhanLabels = $aduanKeseluruhan->keys();
        $chartKeseluruhanData = $aduanKeseluruhan->map(function ($total) use ($totalAduanKeseluruhan) {
            return $totalAduanKeseluruhan > 0 ? round(($total / $totalAduanKeseluruhan) * 100, 2) : 0;
        });

        return view('admin.dashboard', compact(
            'totalBerita',
            'totalGaleri',
            'totalPengunjung',
            'aduanTerbaru',
            'chartBulanIniLabels',
            'chartBulanIniData',
            'chartKeseluruhanLabels',
            'chartKeseluruhanData'
        ));
    }
}
