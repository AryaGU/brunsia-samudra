<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/buttons', function () {
    return view('template.buttons');
})->name('buttons');
Route::get('/cards', function () {
    return view('template.cards');
})->name('cards');
Route::get('/colors', function () {
    return view('template.utilities_color');
})->name('colors');
Route::get('/borders', function () {
    return view('template.utilities_border');
})->name('borders');
Route::get('/animations', function () {
    return view('template.utilities_animation');
})->name('animations');
Route::get('/other', function () {
    return view('template.utilities_other');
})->name('other');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('template.register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('template.forgot_password');
})->name('forgot_password');
Route::get('/404', function () {
    return view('template.404');
})->name('404');
Route::get('/blank', function () {
    return view('blank');
})->name('blank');
Route::get('/charts', function () {
    return view('template.charts');
})->name('charts');
Route::get('/tables', function () {
    return view('template.tables');
})->name('tables');
