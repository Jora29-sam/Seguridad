<?php

namespace Tests\Unit;

use App\Http\Controllers\CelsiusController;
use PHPUnit\Framework\TestCase;

class CelsiusControllerTest extends TestCase
{
    public function test_celsius_result(): void
    {
        $controller = new CelsiusController();

        $result = $controller->celsiusToFahrenheit(10);

        $this->assertEquals(50, $result);

        $this->assertIsNumeric($result);

        $this->assertGreaterThan(0, $result);
    }
}