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

Route::get('/triangle-area', function () {

    $result = null;

    if (request()->has('base') && request()->has('height')) {

        $controller = new OperationsController();

        $result = $controller->triangleArea(
            (float) request('base'),
            (float) request('height')
        );
    }

    return view('triangle-area', compact('result'));
});