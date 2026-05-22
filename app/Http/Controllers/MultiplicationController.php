<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function multiply(Request $request)
    {
        $result = $request->num1 * $request->num2;

        return back()->with('result', $result);
    }
}