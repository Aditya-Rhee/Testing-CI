<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_failure_math_operation() {
        $a = 10;
        $b = 20;
        $jumlah = $a + $b;
        $this->assertTrue($jumlah > 20);
    }
}
