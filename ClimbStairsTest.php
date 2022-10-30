<?php


use PHPUnit\Framework\TestCase;

class ClimbStairsTest extends TestCase
{
    public function testClimbStairs()
    {
        require_once 'ClimbStairs.php';

        $this->assertEquals(1, climbStairs(1));
        $this->assertEquals(2, climbStairs(2));
        $this->assertEquals(3, climbStairs(3));
        $this->assertEquals(5, climbStairs(4));
        $this->assertEquals(8, climbStairs(5));
        $this->assertEquals(13, climbStairs(6));
        $this->assertEquals(21, climbStairs(7));
        $this->assertEquals(34, climbStairs(8));
    }
}
