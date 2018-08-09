<?php

namespace Egorov\Tests;

use Egorov\Strategy\Calculator;
use RuntimeException;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @throws \Exception
     */
    final public function testPlusTwoNumbers(): void
    {
        $sum = new Calculator('+');
        $a = random_int(0, 10000);
        $b = random_int(0, 10000);

        $this->assertEquals(
            $a + $b,
            $sum->calculate($a, $b)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testMinusTwoNumbers(): void
    {
        $sum = new Calculator('-');
        $a = random_int(0, 10000);
        $b = random_int(0, 10000);

        $this->assertEquals(
            $a - $b,
            $sum->calculate($a, $b)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testMultiplyTwoNumbers(): void
    {
        $sum = new Calculator('*');
        $a = random_int(0, 10000);
        $b = random_int(0, 10000);

        $this->assertEquals(
            $a * $b,
            $sum->calculate($a, $b)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testDivideTwoNumbers(): void
    {
        $sum = new Calculator('/');
        $a = random_int(0, 10000);
        $b = random_int(0, 10000);

        $this->assertEquals(
            floor($a / $b),
            $sum->calculate($a, $b)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testDivideByZero(): void
    {
        $sum = new Calculator('/');
        $a = random_int(0, 10000);
        $b = 0;

        $this->expectException(RuntimeException::class);
        $sum->calculate($a, $b);
    }
}
