<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\FacturationController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthVerification;
use App\Http\Controllers\ReservationController;

Route::get('/', [PublicController::class, 'index'])->name('index');


Route::get('/login', [AuthController::class, 'login_view'])->name('login');
Route::post('/login', [AuthController::class, 'login_verif'])->name('login.login');

Route::get('/register', [AuthController::class, 'register_view'])->name('register');
Route::post('/register', [AuthController::class, 'register_store'])->name('register.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(AuthVerification::class)->group(function () {
    Route::post('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/edit_password', [ProfileController::class, 'edit_password'])->name('profile.edit_password');
    Route::post('/profile/edit_avatar', [ProfileController::class, 'edit_avatar'])->name('profile.edit_avatar');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    Route::get('/reservations', [ReservationController::class, 'index_s'])->name('reservation.index_s');
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/reservation/hours', [ReservationController::class, 'hours'])->name('reservation.hours');

    Route::get('/reservation/remove/{id}', [ReservationController::class, 'remove'])->name('reservation.remove');
    Route::post('/reservation', [ReservationController::class, 'reservation'])->name('reservation.reservation');
    Route::get('/reservation/cgr', [ReservationController::class, 'cgr'])->name('reservation.cgr');
    Route::get('/reservation/payment', [ReservationController::class, 'payment'])->name('reservation.payment');
    Route::post('/reservation/register', [ReservationController::class, 'register'])->name('reservation.register');
    Route::post('/reservation/payment', [ReservationController::class, 'cgr_valid'])->name('reservation.verif_payment');

    Route::post('/rating', [ProfileController::class, 'rating'])->name('profile.rating');

    Route::get('/PriseCommande', [PublicController::class, 'PriseCommande'])->name('Commande.PriseCommande');
    Route::post('/commander', [PublicController::class, 'commander'])->name('Commande.commander');
    Route::get('/ReservationCommande', [PublicController::class, 'reserver'])->name('Commande.ReservationCommande');
    Route::post('/ReservationCommande', [PublicController::class, 'ajoutReserverParServeur'])->name('Commande.ReservationCommande');

    Route::get('/Facturation', [FacturationController::class, 'facturer'])->name('Facturation.Facturer');
    Route::post('/Payerfacture', [FacturationController::class, 'payerfacture'])->name('Facturation.payer');

    
});

