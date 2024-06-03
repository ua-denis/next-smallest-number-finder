<?php

namespace App\Algorithms;

use App\Contracts\SearchAlgorithmInterface;

class LinearSearch implements SearchAlgorithmInterface
{
    public function findNextSmallest(array $dataset, int $number): int
    {
        sort($dataset);
        $nextSmallest = -1;
        foreach ($dataset as $value) {
            if ($value < $number) {
                $nextSmallest = $value;
            } else {
                break;
            }
        }
        return $nextSmallest;
    }
}