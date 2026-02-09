<?php
/**
 * Tests for GradientDescent
 */

use PHPUnit\Framework\TestCase;
use Gradientdescent\Gradientdescent;

class GradientdescentTest extends TestCase {
    private Gradientdescent $instance;

    protected function setUp(): void {
        $this->instance = new Gradientdescent(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gradientdescent::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
