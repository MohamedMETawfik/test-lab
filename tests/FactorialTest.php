<?php
use PHPUnit\Framework\TestCase;

require './src/factorial.php';

class FactorialTest extends TestCase
{
    public function testfactorialOfZero()
    {
        $this->assertEquals(1, factorial(0));
    }

    public function testfactorialOfOne()
    {
        $this->assertEquals(1, factorial(1));
    }

    public function testfactorialOfFive()
    {
        $this->assertEquals(120, factorial(5));
    }

    public function testfactorialOfRandomInt()
    {
        $n = rand(4, 10);
        $this->assertEquals(factorial($n-1) * $n, factorial($n));
    }

    public function testfactorialOfNegativeInt()
    {
        $this->assertNull(factorial(-3));
    }

    public function testfactorialOfFloat()
    {
        $this->assertNull(factorial(1.5));
    }

    public function testfactorialOfBoolean()
    {
        $this->assertNull(factorial(false));
    }

    public function testfactorialOfString()
    {
        $this->assertNull(factorial('abc'));
    }
}
?>