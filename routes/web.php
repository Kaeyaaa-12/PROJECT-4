<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController; // Import controller ini

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- HALAMAN PUBLIK ---
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/profil-publik', fn() => view('profil'))->name('profil.publik');
Route::get('/inovasi', [InovasiController::class, 'index'])->name('inovasi.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');


// --- SEMUA RUTE ADMIN DI SATU TEMPAT ---
Route::prefix('admin')->name('admin.')->group(function () {

    // Rute untuk Login & Forgot Password (hanya bisa diakses oleh tamu/guest)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/login', [AuthenticatedSessionController::class, 'store']);

        // [TAMBAHKAN INI] Rute untuk proses kirim email lupa password
        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    });

    // Rute yang Membutuhkan Login Admin
    Route::middleware('auth')->group(function () {
        Route::get('/login/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

        // Fitur Admin Lainnya
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('beritas', BeritaController::class);
        Route::resource('galleries', GalleryController::class);
    });
});


// --- RUTE OTENTIKASI LAINNYA ---
require __DIR__.'/auth.php';
