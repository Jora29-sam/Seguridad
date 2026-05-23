<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function calculate(Request $request)
    {
        $result = $this->discount(
            $request->price,
            $request->discount
        );

        return back()->with('discount_result', $result);
    }

    public function discount($price, $discount)
    {
        if ($price < 0 || $discount < 0 || $discount > 100) {
            return 'Valores inválidos';
        }

        $discountAmount = $price * ($discount / 100);

        return round($price - $discountAmount, 2);
    }
}
