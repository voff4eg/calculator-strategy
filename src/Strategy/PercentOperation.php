<?php

namespace Egorov\Strategy;

class PercentOperation implements OperationInterface
{
    /**
     * @param int $number
     * @param int $percent
     *
     * @return float
     */
    public function calculate(int $number, int $percent): float
    {
        return (($number / 100) * $percent);
    }
}
