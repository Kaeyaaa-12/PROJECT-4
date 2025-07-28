<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // ... (method-method lain yang sudah ada)

    /**
     * Menampilkan halaman layanan SPKT.
     */
    public function spkt()
    {
        return view('layanan.spkt');
    }

    /**
     * Menyimpan aduan baru dari masyarakat.
     */
    public function storeAduan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_aduan' => 'required|string|max:255',
            'waktu_kejadian' => 'required|date',
            'lokasi_kejadian' => 'required|string',
            'isi_laporan' => 'required|string',
            'bukti' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Maks 2MB
        ]);

        $path = null;
        if ($request->hasFile('bukti')) {
            $path = $request->file('bukti')->store('bukti_aduan', 'public');
        }

        Aduan::create([
            'nama' => $request->nama,
            'jenis_aduan' => $request->jenis_aduan,
            'waktu_kejadian' => $request->waktu_kejadian,
            'lokasi_kejadian' => $request->lokasi_kejadian,
            'isi_laporan' => $request->isi_laporan,
            'bukti' => $path,
            'status' => 'Baru', // Status default saat aduan dibuat
        ]);

        return redirect()->route('layanan.spkt')->with('success', 'Laporan Anda berhasil dikirim. Terima kasih.');
    }

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

    public function skck()
    {
        return view('layanan.skck');
    }
}
