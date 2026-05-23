<?php

use App\Http\Controllers\QuadraticController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('quadratic-calculator');
});

Route::post('/calculate', [QuadraticController::class, 'calculate']);
