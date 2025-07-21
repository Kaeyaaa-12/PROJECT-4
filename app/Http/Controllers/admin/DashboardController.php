<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Gallery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total berita
        $totalBerita = Berita::count();

        // Menghitung total gambar di galeri
        $totalGaleri = Gallery::count();

        // Mengambil 5 berita terbaru
        $beritaTerbaru = Berita::latest('published_at')->take(5)->get();

        // Mengambil 6 gambar galeri terbaru
        $galeriTerbaru = Gallery::latest()->take(6)->get();

        // Data dummy untuk total pengunjung, karena belum ada sistem tracking
        $totalPengunjung = 0;

        return view('admin.dashboard', compact(
            'totalBerita',
            'totalGaleri',
            'beritaTerbaru',
            'galeriTerbaru',
            'totalPengunjung'
        ));
    }
}