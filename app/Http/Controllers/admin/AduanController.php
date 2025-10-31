<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AduanController extends Controller
{
    /**
     * Menampilkan daftar semua aduan.
     */
    public function index()
    {
        $aduans = Aduan::latest()->paginate(10); // Menampilkan 10 aduan per halaman
        return view('admin.aduan.index', compact('aduans'));
    }

    /**
     * Menampilkan peta interaktif semua aduan.
     */
    public function map() // NEW METHOD
    {
        // Ambil semua aduan yang memiliki koordinat
        $aduans = Aduan::whereNotNull('latitude')
                        ->whereNotNull('longitude')
                        ->latest()
                        ->get();

        // Data akan di-pass ke view untuk ditampilkan di peta
        return view('admin.aduan.map', compact('aduans'));
    }

    /**
     * Menampilkan detail satu aduan.
     */
    public function show(Aduan $aduan)
    {
        return view('admin.aduan.show', compact('aduan'));
    }

    /**
     * Memperbarui status aduan.
     */
    public function updateStatus(Request $request, Aduan $aduan)
    {
        $request->validate(['status' => 'required|in:Baru,Dalam Proses,Selesai']);
        $aduan->update(['status' => $request->status]);

        return redirect()->route('admin.aduan.index')->with('success', 'Status aduan berhasil diperbarui.');
    }

    /**
     * Menghapus aduan.
     */
    public function destroy(Aduan $aduan)
    {
        if ($aduan->bukti) {
            Storage::disk('public')->delete($aduan->bukti);
        }
        $aduan->delete();

        return redirect()->route('admin.aduan.index')->with('success', 'Aduan berhasil dihapus.');
    }
}
