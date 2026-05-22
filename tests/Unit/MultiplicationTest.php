<?php

namespace Tests\Unit;

use App\Http\Controllers\MultiplicationController;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function test_multiplication_result(): void
    {
        $controller = new MultiplicationController;

        $result = $controller->multiplication(5, 4);

        $this->assertIsInt($result);

        $this->assertNotNull($result);

        $this->assertEquals(20, $result);

        $this->assertGreaterThan(0, $result);
    }
}