<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Cek_Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check() && Auth::user()->role == $role) {
            dd($role);
            return $next($request);
        }
        // if (!Auth::check()) {
        //     return redirect()->back();
        // }

        // $user = Auth::user();

        // if ($user->role == $level) {
        //     return $next($request);
        // }

        return redirect()->back()->with('error', 'Anda Tidak Punya Akses, Silahkan Login!!');
    }
}
