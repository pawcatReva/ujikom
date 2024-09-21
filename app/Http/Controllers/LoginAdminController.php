<?php

namespace App\Http\Controllers;

use App\Models\UserAdmin; // Pastikan model UserAdmin digunakan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('admin.auth.login'); // View login form
    }

    public function login_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Coba login menggunakan guard 'admin'
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect ke dashboard admin jika login berhasil
            return redirect()->route('admin.dashboard')->with('success', 'Berhasil login!');
        } else {
            // Jika login gagal, redirect kembali ke halaman login dengan pesan error
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }
    }

    public function logout()
    {
        // Logout menggunakan guard 'admin'
        Auth::guard('admin')->logout();

        // Redirect ke halaman login admin atau halaman lain
        return redirect()->route('login')->with('success', 'Berhasil logout!');
    }
}
