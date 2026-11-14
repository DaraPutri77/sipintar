
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Halaman utama SIPINTAR.
Route::view('/', 'auth.login')->name('home');

// Halaman login.
Route::view('/login', 'auth.login')->name('login');

// Halaman registrasi.
Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');

// Proses registrasi.
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
