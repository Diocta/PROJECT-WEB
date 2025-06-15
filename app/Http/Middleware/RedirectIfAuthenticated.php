<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // Tambahan: jika user adalah admin (is_admin == 1)
            if (Auth::user()->is_admin == 1) {
                return redirect('admin/index');
            }

            // Jika user sudah login tapi bukan admin
            return redirect('/home');
        }

        // Jika belum login, lanjutkan ke halaman berikutnya (misalnya login/register)
        return $next($request);
    }
}
