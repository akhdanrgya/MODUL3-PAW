<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;

Route::get('/dashboard', [DashboardController::class, 'index'] );
Route::get('/profil', [ProfilController::class, 'index'] );
