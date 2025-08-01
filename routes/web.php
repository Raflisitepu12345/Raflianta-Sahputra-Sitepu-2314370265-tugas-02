<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman Login (Default)
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Halaman Sign-Up
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Halaman Lupa Password
Route::get('/forgot-password', [AuthController::class, 'showForgot'])->name('forgot');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot.post');

// Dashboard (hanya untuk user login)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
