<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->take(8)->get();

        $allBerita = Berita::latest('published_at')->get();

        // Bagi berita sesuai kebutuhan tampilan BARU
        $beritaUtama = $allBerita->first();          // 1 berita utama
        $beritaKecil = $allBerita->skip(1)->take(6); // UBAH: Ambil 6 berita samping
        $beritaTerbaru = $allBerita->skip(7)->take(4); // UBAH: Lewati 7 berita pertama (1 utama + 6 samping)

        return view('landing', compact('galleries', 'beritaUtama', 'beritaKecil', 'beritaTerbaru'));
    }
}
