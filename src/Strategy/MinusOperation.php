<?php

namespace Egorov\Strategy;

class MinusOperation implements OperationInterface
{
    /**
     * @param int $firstArgument
     * @param int $secondArgument
     *
     * @return int
     */
    public function calculate(int $firstArgument, int $secondArgument): int
    {
        return ($firstArgument - $secondArgument);
    }
}
