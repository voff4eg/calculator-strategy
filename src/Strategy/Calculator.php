<?php

namespace Egorov\Strategy;

class Calculator
{
    /** @var OperationInterface */
    private $strategy;

    /**
     * @param string $operation
     */
    public function __construct(string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }

    /**
     * @param string $operation
     *
     * @return OperationInterface
     */
    private function getStrategy(string $operation): OperationInterface
    {
        switch ($operation) {
            case '+':
                return new PlusOperation();
            case '-':
                return new MinusOperation();
            case '*':
                return new MultiplyOperation();
            case '/':
                return new DivideOperation();
            default:
                throw new \RuntimeException('no operation');
        }
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return int
     */
    public function calculate(int $a, int $b): int
    {
        return $this->strategy->calculate($a, $b);
    }
}
