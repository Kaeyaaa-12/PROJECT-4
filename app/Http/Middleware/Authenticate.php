<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()) {
            // Jika mencoba akses halaman admin, arahkan ke login admin
            if ($request->routeIs('admin.*')) {
                return route('admin.login');
            }
            // Jika tidak, arahkan ke login biasa (default)
            return route('login');
        }
        return null;
    }
}