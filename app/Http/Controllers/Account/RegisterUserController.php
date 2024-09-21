<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Models\User; // Correct model
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('account.register_user.register'); // Path to the registration view
    }

    public function register_create(Request $request)
    {
        // Validate data using Validator facade
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:user_admin',
            'email' => 'required|string|email|max:255|unique:user_admin',
            'password' => 'required|string|min:8',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Email atau password salah');
        }

        // Save user data
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('account.login')->with('success', 'Registration successful. Please log in.');
    }
}
