<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CelsiusController extends Controller
{
    public function convert(Request $request)
    {
        $result = ($request->celsius * 9 / 5) + 32;

        return back()->with('celsius', $result);
    }

    public function celsiusToFahrenheit($celsius)
    {
        return ($celsius * 9 / 5) + 32;
    }
}
