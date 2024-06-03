<?php

namespace App\Application;

use App\Contracts\SearchAlgorithmInterface;

class NextSmallestNumberFinder
{
    private SearchAlgorithmInterface $algorithm;

    public function __construct(SearchAlgorithmInterface $algorithm)
    {
        $this->algorithm = $algorithm;
    }

    public function setAlgorithm(SearchAlgorithmInterface $algorithm): void
    {
        $this->algorithm = $algorithm;
    }

    public function findNextSmallest(array $dataset, int $number): int
    {
        return $this->algorithm->findNextSmallest($dataset, $number);
    }
}