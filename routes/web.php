<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\Admin\AduanController;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController as AdminPasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\NewPasswordController as AdminNewPasswordController;

//RUTE PUBLIK
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/profil-publik', fn() => view('profil'))->name('profil.publik');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

//RUTE LAYANAN
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

Route::prefix('inovasi')->name('inovasi.')->group(function () {
    Route::get('/', [InovasiController::class, 'index'])->name('index');
    Route::get('/pos-digital-astuti', [InovasiController::class, 'posDigitalAstuti'])->name('pos_digital_astuti');
    Route::get('/sim-ceria', [InovasiController::class, 'simCeria'])->name('sim_ceria');
    Route::get('/sim-astuti', [InovasiController::class, 'simAstuti'])->name('sim_astuti');
    Route::get('/astuti-mobile', [InovasiController::class, 'astutiMobile'])->name('astuti_mobile');
    Route::get('/tacs', [InovasiController::class, 'tacs'])->name('tacs');
    Route::get('/tar', [InovasiController::class, 'tar'])->name('tar');
});

//RUTE ADMIN
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/login', [AuthenticatedSessionController::class, 'store']);
        Route::post('/forgot-password', [AdminPasswordResetLinkController::class, 'store'])->name('password.email');
        Route::get('reset-password/{token}', [AdminNewPasswordController::class, 'create'])->name('password.reset');
        Route::post('reset-password', [AdminNewPasswordController::class, 'store'])->name('password.store');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/login/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
        Route::resource('beritas', BeritaController::class);
        Route::resource('galleries', GalleryController::class);
        Route::get('aduan', [AduanController::class, 'index'])->name('aduan.index');
        Route::get('aduan/{aduan}', [AduanController::class, 'show'])->name('aduan.show');
        Route::delete('aduan/{aduan}', [AduanController::class, 'destroy'])->name('aduan.destroy');
        Route::patch('aduan/{aduan}/status', [AduanController::class, 'updateStatus'])->name('aduan.updateStatus');
    });
});
