<?php

namespace App\Algorithms;

use App\Contracts\SearchAlgorithmInterface;

class ConstantTimeLookup implements SearchAlgorithmInterface
{
    private array $lookupTable = [];

    private function buildLookupTable(array $dataset): void
    {
        sort($dataset);
        $this->lookupTable = [];

        foreach ($dataset as $index => $value) {
            if ($index > 0) {
                $this->lookupTable[$value] = $dataset[$index - 1];
            }
        }
    }

    public function findNextSmallest(array $dataset, int $number): int
    {
        $this->buildLookupTable($dataset);

        if (isset($this->lookupTable[$number])) {
            return $this->lookupTable[$number];
        }

        $nextSmallest = -1;
        foreach ($dataset as $value) {
            if ($value >= $number) {
                break;
            }
            $nextSmallest = $value;
        }
        return $nextSmallest;
    }
}