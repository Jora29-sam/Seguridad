<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
use PHPUnit\Framework\TestCase;

class TriangleAreaTest extends TestCase
{
    public function test_triangle_area_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->triangleArea(10, 5);

        $this->assertIsFloat($result);

        $this->assertNotNull($result);

        $this->assertEquals(25, $result);

        $this->assertGreaterThan(0, $result);
    }
}
