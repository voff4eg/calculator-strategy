<?php

namespace Egorov\Strategy;

class Calculator
{
    /** @var OperationInterface */
    private $strategy;

    /**
     * @param OperationInterface $strategy
     *
     * @return $this
     */
    public function setStrategy(OperationInterface $strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * @param int $firstArgument
     * @param int $secondArgument
     *
     * @return int|float
     */
    public function calculate(int $firstArgument, int $secondArgument)
    {
        if (!$this->strategy) {
            throw new \RuntimeException('Не установлена стратегия!');
        }

        return $this->strategy->calculate($firstArgument, $secondArgument);
    }
}
