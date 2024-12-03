<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'login_view'])->name('login');
