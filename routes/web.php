<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiplicationController;
use App\Http\Controllers\QuadraticController;

Route::get('/', function () {
    return view('quadratic-calculator');
});

Route::post('/multiply', [MultiplicationController::class, 'multiply']);

Route::post('/calculate', [QuadraticController::class, 'calculate']);