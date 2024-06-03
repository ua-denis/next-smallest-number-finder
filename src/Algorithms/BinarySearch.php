<?php

namespace App\Algorithms;

use App\Contracts\SearchAlgorithmInterface;

class BinarySearch implements SearchAlgorithmInterface
{
    public function findNextSmallest(array $dataset, int $number): int
    {
        sort($dataset);
        $low = 0;
        $high = count($dataset) - 1;
        $nextSmallest = -1;

        while ($low <= $high) {
            $mid = (int)(($low + $high) / 2);
            if ($dataset[$mid] < $number) {
                $nextSmallest = $dataset[$mid];
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return $nextSmallest;
    }
}