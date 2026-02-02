<?php
/**
 * Tests for SwarmNftport
 */

use PHPUnit\Framework\TestCase;
use Swarmnftport\Swarmnftport;

class SwarmnftportTest extends TestCase {
    private Swarmnftport $instance;

    protected function setUp(): void {
        $this->instance = new Swarmnftport(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Swarmnftport::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
