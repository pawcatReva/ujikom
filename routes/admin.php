<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAdminController;



Route::get('/test',[UserAdminController::class, 'getData'])->name('admin.test');
// Route::resource('user-admin', UserAdminController::class);