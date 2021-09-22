<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FacteursTest extends TestCase
{
    public function testOne()
    {
        $this->assertEquals([],Facteurs::generate(1), "1 n'a pas de facteur premier");
    }

   public function testTwo()
    {
        $this->assertEquals([2], Facteurs::generate(2), "2 a un seul facteur premier");
    }

    public function testThree()
    {
        $this->assertEquals([3], Facteurs::generate(3), "3 a un seul facteur premier");
    }

    public function testFour()
    {
        $this->assertEquals([2, 2], Facteurs::generate(4), "4 a 2 facteurs premiers");
    }

    public function testEight()
    {
        $this->assertEquals([2, 2, 2], Facteurs::generate(8));
    }

    public function testThirteen()
    {
        $this->assertEquals([13], Facteurs::generate(13));
    }
}