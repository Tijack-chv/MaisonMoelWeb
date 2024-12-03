<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;

Route::get('/', [PublicController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'login_view'])->name('login');
Route::post('/login', [AuthController::class, 'login_verif'])->name('login.login');

Route::get('/register', [AuthController::class, 'register_view'])->name('register');
Route::post('/register', [AuthController::class, 'register_store'])->name('register.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/api/login', [ApiController::class, 'api_login']);