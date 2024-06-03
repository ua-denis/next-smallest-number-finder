<?php

namespace Tests;

use App\Algorithms\BinarySearch;
use App\Algorithms\ConstantTimeLookup;
use App\Algorithms\LinearSearch;
use App\Application\NextSmallestNumberFinder;
use PHPUnit\Framework\TestCase;

class NextSmallestNumberFinderTest extends TestCase
{
    private array $dataset;

    protected function setUp(): void
    {
        $this->dataset = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];
    }

    public function testConstantTimeLookup(): void
    {
        $algorithm = new ConstantTimeLookup();
        $finder = new NextSmallestNumberFinder($algorithm);

        $this->assertEquals(-1, $finder->findNextSmallest($this->dataset, 2));
        $this->assertEquals(-1, $finder->findNextSmallest($this->dataset, 3));
        $this->assertEquals(3, $finder->findNextSmallest($this->dataset, 4));
        $this->assertEquals(10, $finder->findNextSmallest($this->dataset, 11));
        $this->assertEquals(12, $finder->findNextSmallest($this->dataset, 14));
        $this->assertEquals(17, $finder->findNextSmallest($this->dataset, 18));
        $this->assertEquals(19, $finder->findNextSmallest($this->dataset, 21));
        $this->assertEquals(21, $finder->findNextSmallest($this->dataset, 23));
    }

    public function testBinarySearch(): void
    {
        $algorithm = new BinarySearch();
        $finder = new NextSmallestNumberFinder($algorithm);

        $this->assertEquals(-1, $finder->findNextSmallest($this->dataset, 2));
        $this->assertEquals(-1, $finder->findNextSmallest($this->dataset, 3));
        $this->assertEquals(3, $finder->findNextSmallest($this->dataset, 4));
        $this->assertEquals(10, $finder->findNextSmallest($this->dataset, 11));
        $this->assertEquals(12, $finder->findNextSmallest($this->dataset, 14));
        $this->assertEquals(17, $finder->findNextSmallest($this->dataset, 18));
        $this->assertEquals(19, $finder->findNextSmallest($this->dataset, 21));
        $this->assertEquals(21, $finder->findNextSmallest($this->dataset, 23));
    }

    public function testLinearSearch(): void
    {
        $algorithm = new LinearSearch();
        $finder = new NextSmallestNumberFinder($algorithm);

        $this->assertEquals(-1, $finder->findNextSmallest($this->dataset, 2));
        $this->assertEquals(-1, $finder->findNextSmallest($this->dataset, 3));
        $this->assertEquals(3, $finder->findNextSmallest($this->dataset, 4));
        $this->assertEquals(10, $finder->findNextSmallest($this->dataset, 11));
        $this->assertEquals(12, $finder->findNextSmallest($this->dataset, 14));
        $this->assertEquals(17, $finder->findNextSmallest($this->dataset, 18));
        $this->assertEquals(19, $finder->findNextSmallest($this->dataset, 21));
        $this->assertEquals(21, $finder->findNextSmallest($this->dataset, 23));
    }
}