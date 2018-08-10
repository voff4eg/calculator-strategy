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
        $firstArgument = random_int(0, 10000);
        $secondArgument = random_int(0, 10000);

        $this->assertEquals(
            $firstArgument + $secondArgument,
            $sum->calculate($firstArgument, $secondArgument)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testMinusTwoNumbers(): void
    {
        $sum = new Calculator('-');
        $firstArgument = random_int(0, 10000);
        $secondArgument = random_int(0, 10000);

        $this->assertEquals(
            $firstArgument - $secondArgument,
            $sum->calculate($firstArgument, $secondArgument)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testMultiplyTwoNumbers(): void
    {
        $sum = new Calculator('*');
        $firstArgument = random_int(0, 10000);
        $secondArgument = random_int(0, 10000);

        $this->assertEquals(
            $firstArgument * $secondArgument,
            $sum->calculate($firstArgument, $secondArgument)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testDivideTwoNumbers(): void
    {
        $sum = new Calculator('/');
        $firstArgument = random_int(0, 10000);
        $secondArgument = random_int(0, 10000);

        $this->assertEquals(
            floor($firstArgument / $secondArgument),
            $sum->calculate($firstArgument, $secondArgument)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testDivideByZero(): void
    {
        $sum = new Calculator('/');
        $firstArgument = random_int(0, 10000);
        $secondArgument = 0;

        $this->expectException(RuntimeException::class);
        $sum->calculate($firstArgument, $secondArgument);
    }
}
