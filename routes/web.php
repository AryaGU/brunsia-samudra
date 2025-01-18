<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/buttons', function () {
    return view('buttons');
})->name('buttons');
Route::get('/cards', function () {
    return view('cards');
})->name('cards');
Route::get('/colors', function () {
    return view('utilities_color');
})->name('colors');
Route::get('/borders', function () {
    return view('utilities_border');
})->name('borders');
Route::get('/animations', function () {
    return view('utilities_animation');
})->name('animations');
Route::get('/other', function () {
    return view('utilities_other');
})->name('other');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('forgot_password');
})->name('forgot_password');
Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/blank', function () {
    return view('blank');
})->name('blank');
Route::get('/charts', function () {
    return view('charts');
})->name('charts');
Route::get('/tables', function () {
    return view('tables');
})->name('tables');
