<?php
/**
 * Tests for CrewHash
 */

use PHPUnit\Framework\TestCase;
use Crewhash\Crewhash;

class CrewhashTest extends TestCase {
    private Crewhash $instance;

    protected function setUp(): void {
        $this->instance = new Crewhash(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewhash::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
