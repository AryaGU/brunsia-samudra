<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/data-pengiriman', [AdminController::class, 'data_pengiriman'])->name('data_pengiriman');
    Route::get('/admin/data-pengiriman/tambah', [AdminController::class, 'tambah_data_pengiriman'])->name('data_pengiriman.tambah');
    Route::post('/admin/data-pengiriman/tambah', [AdminController::class, 'store_data_pengiriman'])->name('data_pengiriman.store');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'storeLogin'])->name('login.store');
