<?php

use App\Http\Controllers\CelsiusController;
use App\Http\Controllers\MultiplicationController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\QuadraticController;
use App\Http\Controllers\RestaController;
use App\Http\Controllers\DivisionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('quadratic-calculator');
});

Route::post('/multiply', [MultiplicationController::class, 'multiply']);

Route::post('/calculate', [QuadraticController::class, 'calculate']);

Route::post('/celsius-convert', [CelsiusController::class, 'convert']);

Route::post('/subtract', [RestaController::class, 'subtract']);

Route::post('/divide', [DivisionController::class, 'divide']);

Route::get('/triangle-area', function () {

    $result = null;

    if (request()->has('base') && request()->has('height')) {

        $controller = new OperationsController;

        $result = $controller->triangleArea(
            (float) request('base'),
            (float) request('height')
        );
    }

    return view('triangle-area', compact('result'));
});
