<?php

namespace Egorov\Tests;

use Egorov\Strategy\Calculator;
use Egorov\Strategy\DivideOperation;
use Egorov\Strategy\MultiplyOperation;
use Egorov\Strategy\PercentOperation;
use Egorov\Strategy\PlusOperation;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class CalculatorTest extends TestCase
{
    /**
     * @throws \Exception
     */
    final public function testPlusTwoNumbers(): void
    {
        $calculator = new Calculator();
        $firstArgument = random_int(0, 10000);
        $secondArgument = random_int(0, 10000);

        $this->assertEquals(
            $firstArgument + $secondArgument,
            $calculator->setStrategy(new PlusOperation())->calculate($firstArgument, $secondArgument)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testMinusTwoNumbers(): void
    {
        $calculator = new Calculator();
        $firstArgument = random_int(0, 10000);
        $secondArgument = random_int(0, 10000);

        $this->assertEquals(
            $firstArgument - $secondArgument,
            $calculator->calculate($firstArgument, $secondArgument)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testMultiplyTwoNumbers(): void
    {
        $calculator = new Calculator();
        $firstArgument = random_int(0, 10000);
        $secondArgument = random_int(0, 10000);

        $this->assertEquals(
            $firstArgument * $secondArgument,
            $calculator->setStrategy(new MultiplyOperation())->calculate($firstArgument, $secondArgument)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testDivideTwoNumbers(): void
    {
        $calculator = new Calculator();
        $firstArgument = random_int(0, 10000);
        $secondArgument = random_int(0, 10000);

        $this->assertEquals(
            floor($firstArgument / $secondArgument),
            $calculator->setStrategy(new DivideOperation())->calculate($firstArgument, $secondArgument)
        );
    }

    /**
     * @throws \Exception
     */
    final public function testDivideByZero(): void
    {
        $calculator = new Calculator();
        $firstArgument = random_int(0, 10000);
        $secondArgument = 0;

        $this->expectException(RuntimeException::class);
        $calculator->setStrategy(new DivideOperation())->calculate($firstArgument, $secondArgument);
    }

    /**
     * @throws \Exception
     */
    final public function testCalculatePercent(): void
    {
        $calculator = new Calculator();
        $number = random_int(0, 10000);
        $percentArgument = random_int(0, 100);

        $this->assertEquals(
            ($number / 100) * $percentArgument,
            $calculator->setStrategy(new PercentOperation())->calculate($number, $percentArgument)
        );
    }
}
