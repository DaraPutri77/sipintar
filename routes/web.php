<?php

use Illuminate\Support\Facades\Route;

// Halaman utama SIPINTAR
Route::view('/', 'auth.login')->name('home');

// Halaman login
Route::view('/login', 'auth.login')->name('login');
