<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            abort(403, 'Belum login!');
        }
        if (Auth::user()->username !== 'HokoiAja') {
            abort(403, 'Admin sekarang: ' . !Auth::user()->is_admin);
        }
        return $next($request);
    }
}
