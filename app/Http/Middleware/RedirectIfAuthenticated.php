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
            if (Auth::user()->is_admin) {
                return redirect('/admin/dashboard'); // Admin ke dashboard admin
            }
            return redirect('/shop'); // User biasa ke toko
        }

        return $next($request);
    }
}
