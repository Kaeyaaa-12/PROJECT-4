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
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\Admin\AduanController; // Tambahkan ini

// ... (route publik lainnya)
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/profil-publik', fn() => view('profil'))->name('profil.publik');
Route::get('/inovasi', [InovasiController::class, 'index'])->name('inovasi.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// --- RUTE LAYANAN ---
Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('/spkt', [LayananController::class, 'spkt'])->name('spkt');
    Route::post('/aduan', [LayananController::class, 'storeAduan'])->name('aduan.store');
    Route::get('/pengaduan', [LayananController::class, 'pengaduan'])->name('pengaduan');
    Route::get('/bpkb-stnk', [LayananController::class, 'bpkbStnk'])->name('bpkb_stnk');
    Route::get('/izin-keramaian', [LayananController::class, 'izinKeramaian'])->name('izin_keramaian');
    Route::get('/pengawalan', [LayananController::class, 'pengawalan'])->name('pengawalan');
    Route::get('/besuk-tahanan', [LayananController::class, 'besukTahanan'])->name('besuk_tahanan');
    Route::get('/sidik-jari', [LayananController::class, 'sidikJari'])->name('sidik_jari');
    Route::get('/sp2hp', [LayananController::class, 'sp2hp'])->name('sp2hp');
    Route::get('/sim', [LayananController::class, 'sim'])->name('sim');
    Route::get('/skck', [LayananController::class, 'skck'])->name('skck');
});

// --- RUTE ADMIN ---
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/login', [AuthenticatedSessionController::class, 'store']);
        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/login/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

        // Resource routes
        Route::resource('beritas', BeritaController::class);
        Route::resource('galleries', GalleryController::class);

        // Rute untuk Laporan Aduan
        Route::get('aduan', [AduanController::class, 'index'])->name('aduan.index');
        Route::get('aduan/{aduan}', [AduanController::class, 'show'])->name('aduan.show');
        Route::delete('aduan/{aduan}', [AduanController::class, 'destroy'])->name('aduan.destroy');
        Route::patch('aduan/{aduan}/status', [AduanController::class, 'updateStatus'])->name('aduan.updateStatus');
    });
});

require __DIR__.'/auth.php';