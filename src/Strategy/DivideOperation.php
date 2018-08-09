<?php

namespace Egorov\Strategy;

class DivideOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     *
     * @return int
     */
    public function calculate(int $a, int $b): int
    {
        if ($b === 0) {
            throw new \RuntimeException('деление на 0');
        }

        return ($a / $b);
    }
}
