<?php
//AQUI HAREMOS RESTA
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaController extends Controller
{
    public function subtract(Request $request)
    {
        $result = $request->numero1 - $request->numero2;

        return back()->with('resultado', $result);
    }

    public function resta($numero1, $numero2)
    {
        return $numero1 - $numero2;
    }
}