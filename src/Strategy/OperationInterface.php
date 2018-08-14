<?php

namespace Egorov\Strategy;

interface OperationInterface
{
    /**
     * @param int $firstArgument
     * @param int $secondArgument
     *
     * @return int|float
     */
    public function calculate(int $firstArgument, int $secondArgument);
}
