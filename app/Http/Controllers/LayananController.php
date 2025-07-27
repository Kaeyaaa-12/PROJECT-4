<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function pengaduan()
    {
        return view('layanan.pengaduan');
    }

    public function bpkbStnk()
    {
        return view('layanan.bpkb_stnk');
    }

    public function izinKeramaian()
    {
        return view('layanan.izin_keramaian');
    }

    public function pengawalan()
    {
        return view('layanan.pengawalan');
    }

    public function besukTahanan()
    {
        return view('layanan.besuk_tahanan');
    }

    public function sidikJari()
    {
        return view('layanan.sidik_jari');
    }

    public function sp2hp()
    {
        return view('layanan.sp2hp');
    }

    public function sim()
    {
        return view('layanan.sim');
    }

    // Method baru untuk layanan SKCK
    public function skck()
    {
        return view('layanan.skck');
    }
}