<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/admin/data-pengiriman', [AdminController::class, 'data_pengiriman'])->name('data_pengiriman');
Route::get('/admin/data-pengiriman/tambah', [AdminController::class, 'tambah_data_pengiriman'])->name('data_pengiriman.tambah');
