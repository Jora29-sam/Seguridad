<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuadraticController extends Controller
{
    public function calculate(Request $request)
    {
        $request->validate([
            'a' => 'required|numeric|not_in:0',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        $a = (float) $request->a;
        $b = (float) $request->b;
        $c = (float) $request->c;

        $discriminante = ($b * $b) - (4 * $a * $c);

        if ($discriminante < 0) {
            return back()->with('error', 'No existen raíces reales.');
        }

        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

        return back()->with([
            'x1' => round($x1, 4),
            'x2' => round($x2, 4),
        ]);

    }
}
