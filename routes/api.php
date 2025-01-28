<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('/login', [ApiController::class, 'api_login']);
Route::get('/plats', [ApiController::class, 'plats']);
Route::get('/sendMessage', [ApiController::class, 'sendMessage']);
Route::get('/getMessages', [ApiController::class, 'getMessages']);
Route::get('/getCommandes', [ApiController::class, 'getCommandes']);