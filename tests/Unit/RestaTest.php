<?php

namespace Tests\Unit;

use App\Http\Controllers\RestaController;
use PHPUnit\Framework\TestCase;

class RestaTest extends TestCase
{
    public function test_resta_result(): void
    {
        $controller = new RestaController;

        $result = $controller->resta(10, 4);

        $this->assertIsInt($result);

        $this->assertNotNull($result);

        $this->assertEquals(6, $result);

        $this->assertGreaterThan(0, $result);
    }
}
