<?php

namespace Egorov\Strategy;

class DivideOperation implements OperationInterface
{
    /**
     * @param int $firstArgument
     * @param int $secondArgument
     *
     * @return int
     */
    public function calculate(int $firstArgument, int $secondArgument): int
    {
        if ($secondArgument === 0) {
            throw new \RuntimeException('деление на 0');
        }

        return ($firstArgument / $secondArgument);
    }
}
