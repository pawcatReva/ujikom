<?php

namespace App\Http\Middleware;

use App\Models\Keranjang;
use Closure;
use Illuminate\Http\Request;

class KeranjangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('keranjang.index');
        }
        $userId = auth()->id(); // Ambil ID pengguna yang sedang login
        $keranjangCount = Keranjang::where('user_id', $userId)->count(); // Hitung jumlah item di keranjang

        if ($keranjangCount == 0) {
            // Redirect ke halaman keranjang atau halaman lain jika tidak ada item
            return redirect()->route('keranjang.index')->with('error', 'Keranjang Anda kosong. Silakan tambahkan item.');
        }
        return $next($request);
    }
}
