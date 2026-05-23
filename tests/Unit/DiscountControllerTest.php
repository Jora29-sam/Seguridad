<?php

namespace Tests\Unit;

use App\Http\Controllers\DiscountController;
use PHPUnit\Framework\TestCase;

class DiscountControllerTest extends TestCase
{
    public function test_discount_calculation(): void
    {
        $controller = new DiscountController;

        $result = $controller->discount(100, 20);

        $this->assertEquals(80, $result);
    }

    public function test_invalid_discount(): void
    {
        $controller = new DiscountController;

        $result = $controller->discount(100, 120);

        $this->assertEquals('Valores inválidos', $result);
    }
}
