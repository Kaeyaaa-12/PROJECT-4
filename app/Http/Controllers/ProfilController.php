<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfilController extends Controller
{
    public function showPublicProfil(): View
    {
        return view('profil');
    }

    /**
     * Menampilkan halaman detail satuan kerja secara dinamis.
     * Metode ini menggantikan semua metode individual seperti bagops(), bagsdm(), dll.
     */
    public function showSatuan(Request $request, $page): View
    {
        // 1. Ambil nama file logo dari parameter URL (?logo=namafile.jpg)
        $logo = $request->query('logo');

        // 2. Cek apakah view untuk halaman yang diminta ada
        if (!view()->exists('profil.' . $page)) {
            // Jika tidak ada, tampilkan halaman error 404
            abort(404);
        }

        // 3. Tampilkan view yang sesuai dan kirimkan variabel 'logo' ke dalamnya
        return view('profil.' . $page, ['logo' => $logo]);
    }
}
