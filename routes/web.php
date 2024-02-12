<?php

// routes/web.php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/reserva', [ReservaController::class, 'index']);
Route::get('/sobre', [SobreController::class, 'index']);
