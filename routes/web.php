<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\Account\LoginUserController;
use App\Http\Controllers\Account\RegisterUserController;
use App\Http\Controllers\PesananController;

/*
|------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
| These routes are loaded by the RouteServiceProvider within a group 
| which contains the "web" middleware group. Now create something great!
|
*/
Route::get('dashboard', function () {
    return view('dashboard'); // Pastikan Anda punya file blade di resources/views/dashboard.blade.php
})->name('dashboard');

Route::get('/', function () {
    return view('account/register_user.register');
})->name('account.register_user.register');

Route::get('administrator', function () {
    return view('admin/dashboard');
})->middleware('auth:admin')->name('admin.dashboard');

Route::get('account', function () {
    return view('account/dashboard');
})->name('account.dashboard');

Route::resource('keranjang', KeranjangController::class)->middleware('auth:user');
Route::resource('shoping', ShopingController::class);
// Route::resource('ramuan', RamuanController::class);

Route::resource('pesanan', PesananController::class);
Route::post('/pesanan/{id}', [PesananController::class, 'store'])->name('pesanan.store');

Route::resource('stok', StokController::class);
Route::resource('user_admin',UserAdminController::class);
Route::resource('user',UserController::class)->middleware('auth:user');
// Route::post('user_admin/isExistEmail', [UserAdminController::class, 'isExistEmail'])->name('user_admin.isExistEmail');

// Registration routes
Route::get('/register_admin', [RegisterAdminController::class, 'index'])->name('register');
Route::post('/register-proses', [RegisterAdminController::class, 'register_proses'])->name('register-proses');

// Login routes
Route::get('login_admin', [LoginAdminController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginAdminController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginAdminController::class, 'logout'])->name('logout');

Route::get('login_user', [LoginUserController::class, 'index'])->name('account.login');
Route::post('/login-create', [LoginUserController::class, 'login_create'])->name('login-create');
Route::get('/account/logout', [LoginUserController::class, 'logout_user'])->name('logout_user');

// Registration routes
Route::get('/register_user', [RegisterUserController::class, 'index'])->name('account.register');
Route::post('/register-user', [RegisterUserController::class, 'register_create'])->name('register-create');

