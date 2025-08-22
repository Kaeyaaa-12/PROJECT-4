<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InovasiController extends Controller
{
    /**
     * Menampilkan halaman utama inovasi (inovasi.blade.php).
     */
    public function index()
    {
        return view('inovasi'); // <== ini langsung ke inovasi.blade.php di folder /views
    }

    /**
     * Menampilkan detail Pos Digital Astuti.
     */

    public function simCeria()
    {
        return view('inovasi.sim_ceria');
    }

    public function posDigitalAstuti()
    {
        return view('inovasi.pos_digital_astuti');
    }

    public function simAstuti()
    {
        return view('inovasi.sim_astuti');
    }

    public function astutiMobile()
    {
        return view('inovasi.astuti_mobile');
    }

    public function tacs()
    {
        return view('inovasi.tacs');
    }

    public function tar()
    {
        return view('inovasi.tar');
    }

    public function mobilSenyum()
    {
        return view('inovasi.mobil_senyum');
    }
}
