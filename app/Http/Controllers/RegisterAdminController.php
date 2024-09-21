<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAdmin; // Correct model
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterAdminController extends Controller
{
    public function index()
    {
        return view('admin.auth.register'); // Path to the registration view
    }

    public function register_proses(Request $request)
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
        UserAdmin::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
