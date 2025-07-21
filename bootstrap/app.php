<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// Tambahkan dua baris ini
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Logika redirect dipindahkan ke sini

        // 1. Mengarahkan jika pengguna SUDAH LOGIN
        // Jika pengguna yang sudah login mencoba mengakses halaman login,
        // mereka akan diarahkan ke dasbor admin.
        RedirectIfAuthenticated::redirectUsing(function ($request) {
            return route('admin.dashboard');
        });

        // 2. Mengarahkan jika pengguna BELUM LOGIN
        // Jika pengguna yang belum login mencoba mengakses halaman admin,
        // mereka akan diarahkan ke halaman login admin.
        Authenticate::redirectUsing(function ($request) {
            if (! $request->expectsJson()) {
                return route('admin.login');
            }
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();