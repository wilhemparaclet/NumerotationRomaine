<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ExoTest extends TestCase
{
    public function testOne()
    {
        $this->assertEquals(["I"],Exo::decimalToRoman(1));
    }
}