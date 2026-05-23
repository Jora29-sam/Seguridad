<?php

namespace Tests\Unit;

use App\Http\Controllers\DivisionController;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function test_division_result(): void
    {
        $controller = new DivisionController;

        $result = $controller->division(10, 2);

        $this->assertEquals(5, $result);
        $this->assertIsNumeric($result);
        $this->assertGreaterThan(0, $result);
    }
}
