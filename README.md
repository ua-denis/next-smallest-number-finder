1. Install Composer Dependencies:

```
composer install
```

2. Run PHPUnit Tests:

```
vendor/bin/phpunit --colors=always --testdox tests
```

3. Checking the work. Run index.php

```
php index.php
```

### Examples of using:

```
$dataset = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];

$finder = new NextSmallestNumberFinder(new ConstantTimeLookup());
echo "Using ConstantTimeLookup:\n";
echo 'Next smallest 3: '.$finder->findNextSmallest($dataset, 3)."\n";
echo 'Next smallest 4: '.$finder->findNextSmallest($dataset, 4)."\n";
echo 'Next smallest 11: '.$finder->findNextSmallest($dataset, 11)."\n";
echo 'Next smallest 14: '.$finder->findNextSmallest($dataset, 14)."\n";
echo 'Next smallest 18: '.$finder->findNextSmallest($dataset, 18)."\n";
echo 'Next smallest 21: '.$finder->findNextSmallest($dataset, 21)."\n";
echo 'Next smallest 23: '.$finder->findNextSmallest($dataset, 23)."\n";

$finder->setAlgorithm(new BinarySearch());
echo "Using BinarySearch:\n";
echo 'Next smallest 3: '.$finder->findNextSmallest($dataset, 3)."\n";
echo 'Next smallest 4: '.$finder->findNextSmallest($dataset, 4)."\n";
echo 'Next smallest 11: '.$finder->findNextSmallest($dataset, 11)."\n";
echo 'Next smallest 14: '.$finder->findNextSmallest($dataset, 14)."\n";
echo 'Next smallest 18: '.$finder->findNextSmallest($dataset, 18)."\n";
echo 'Next smallest 21: '.$finder->findNextSmallest($dataset, 21)."\n";
echo 'Next smallest 23: '.$finder->findNextSmallest($dataset, 23)."\n";

$finder->setAlgorithm(new LinearSearch());
echo "Using LinearSearch:\n";
echo 'Next smallest 3: '.$finder->findNextSmallest($dataset, 3)."\n";
echo 'Next smallest 4: '.$finder->findNextSmallest($dataset, 4)."\n";
echo 'Next smallest 11: '.$finder->findNextSmallest($dataset, 11)."\n";
echo 'Next smallest 14: '.$finder->findNextSmallest($dataset, 14)."\n";
echo 'Next smallest 18: '.$finder->findNextSmallest($dataset, 18)."\n";
echo 'Next smallest 21: '.$finder->findNextSmallest($dataset, 21)."\n";
echo 'Next smallest 23: '.$finder->findNextSmallest($dataset, 23)."\n";
```