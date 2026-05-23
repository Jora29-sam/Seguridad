<?php

use App\Http\Controllers\MultiplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('quadratic-calculator');
});

Route::post('/multiply', [MultiplicationController::class, 'multiply']);
