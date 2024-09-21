<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('account.login_user.login'); // View login form
    }

    public function login_create(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {

            // Redirect ke dashboard atau halaman lain
            return redirect()->route('dashboard')->with('success', 'Berhasil login!');
        } else {
            // Jika login gagal
            return redirect()->route('account.login')->with('error', 'Email atau password salah');
        }
    }
    public function logout_user()
{
    // Logout user
    Auth::guard('user')->logout();

    // Redirect ke halaman login atau halaman lain
    return redirect()->route('account.login')->with('success', 'Berhasil logout!');
}
}
