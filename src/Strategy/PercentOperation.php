<?php

namespace Egorov\Strategy;

class PercentOperation implements OperationInterface
{
    /**
     * @param int $number
     * @param int $percent
     *
     * @return int
     */
    public function calculate(int $number, int $percent): int
    {
        return (($number / 100) * $percent);
    }
}
