<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\RamuanController;
use App\Http\Controllers\StokController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('administrator', function () {
    return view('admin/dashboard');
})->name('admin.dashboard');

Route::resource('keranjang',KeranjangController::class);
Route::resource('shoping',ShopingController::class);
Route::resource('ramuan',RamuanController::class);
Route::resource('stok',StokController::class);