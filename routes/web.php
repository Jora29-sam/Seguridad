<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('quadratic-calculator');
});

use App\Http\Controllers\OperationsController;

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
