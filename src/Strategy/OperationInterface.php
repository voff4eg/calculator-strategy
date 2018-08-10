<?php

namespace Egorov\Strategy;

interface OperationInterface
{
    public function calculate(int $firstArgument, int $secondArgument): int;
}
