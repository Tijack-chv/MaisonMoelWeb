<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('/login', [ApiController::class, 'api_login']);
Route::get('/plats', [ApiController::class, 'plats']);