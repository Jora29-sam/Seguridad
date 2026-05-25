<?php

namespace Tests\Unit;

use App\Http\Controllers\QuadraticController;
use Illuminate\Http\Request;
use Tests\TestCase;

class QuadraticControllerTest extends TestCase
{
    public function test_quadratic_calculation(): void
    {
        $controller = new QuadraticController;

        $request = Request::create('/calculate', 'POST', [
            'a' => 0,
            'b' => -5,
            'c' => 6,
        ]);

        $response = $controller->calculate($request);

        $this->assertNotNull($response);
        $this->assertIsObject($response);

        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals(3.0, session('x1'));
        $this->assertEquals(2.0, session('x2'));
    }
}
