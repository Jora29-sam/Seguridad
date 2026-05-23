<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function divide(Request $request)
    {
        // Evitar división entre 0
        if ($request->num2 == 0) {
            return back()->with('error', 'No se puede dividir entre 0');
        }

        $result = $request->num1 / $request->num2;

        return back()->with('result', $result);
    }

    public function division($a, $b)
    {
        // Evitar división entre 0
        if ($b == 0) {
            return "Error: no se puede dividir entre 0";
        }

        return $a / $b;
    }
}
