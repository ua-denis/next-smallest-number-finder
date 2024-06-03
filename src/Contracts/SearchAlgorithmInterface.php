<?php

namespace App\Contracts;

interface SearchAlgorithmInterface
{
    public function findNextSmallest(array $dataset, int $number): int;
}