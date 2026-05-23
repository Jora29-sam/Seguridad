<?php

namespace Tests\Unit;

use App\Http\Controllers\DivisionController;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function test_multiplication_result(): void
    {
        $controller = new DivisionController;

        $result = $controller->division(5, 4);

        $this->assertIsInt($result);

        $this->assertNotNull($result);

        $this->assertEquals(20, $result);

        $this->assertGreaterThan(0, $result);
    }
}