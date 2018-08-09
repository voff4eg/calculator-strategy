<?php

namespace Egorov\Strategy;

class MultiplyOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     *
     * @return int
     */
    public function calculate(int $a, int $b): int
    {
        return ($a * $b);
    }
}
