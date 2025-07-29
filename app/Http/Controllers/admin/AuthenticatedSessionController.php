<?php

// Pastikan namespace dan use menggunakan backslash (\) bukan titik (.)
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Menampilkan halaman login untuk admin.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Menangani permintaan login yang masuk.
     * Logika ini DIPERBAIKI untuk menggunakan 'email' sebagai input.
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Validasi input: email dan password wajib diisi.
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // 2. Coba lakukan otentikasi menggunakan kredensial 'email' dan 'password'.
        if (! Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // 3. Jika otentikasi gagal, kembali ke halaman login dengan pesan error.
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        // 4. Jika berhasil, buat sesi baru untuk keamanan.
        $request->session()->regenerate();

        // 5. Alihkan ke rute dashboard admin.
        return redirect()->intended(route('admin.dashboard'));
    }

    /**
     * Menghancurkan sesi (logout) pengguna.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
