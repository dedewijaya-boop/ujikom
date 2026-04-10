<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu');
        }

        $user = Auth::user();

        // Cek apakah user adalah admin (role = 'admin')
        if ($user && $user->role === 'admin') {
            return $next($request);
        }

        // Jika bukan admin
        return redirect('/')->with('error', 'Akses ditolak! Kamu bukan admin.');
    }
}