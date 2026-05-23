<?php

use App\Http\Controllers\MultiplicationController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\QuadraticController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('quadratic-calculator');
});

Route::post('/multiply', [MultiplicationController::class, 'multiply']);

Route::post('/calculate', [QuadraticController::class, 'calculate']);
