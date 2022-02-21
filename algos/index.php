<?php

$nums = [
    8, 6, 42, 2, 53, 1, 0, 35
];

$sum = 0;

foreach ($nums as $value) {
    $sum += $value;
}

printf("Somme : %d%s", $sum, PHP_EOL);


$longueur = count($nums);
printf("Moyenne : %d%s", $sum / $longueur, PHP_EOL);


$nums = [8, 6, 42, 2, 53, 1, 0, 35,];

$min = $nums[0];

foreach ($nums as $num) {
    if ($min > $num) {
        $min = $num;
    }
}

printf("Minimum : %d%s", $min, PHP_EOL);

$max = $nums[0];

foreach ($nums as $num) {
    if ($max < $num) {
        $max = $num;
    }
}

printf("Maximum : %d%s", $max, PHP_EOL);


$values = [];

for ($i = 0; $i <= 100; $i++) {
    $values[] = rand(1, 10000000000);
}

sort($values);

$numberToFind = 42;
$imin = 0;
$imax = count($values);
$indexOfNumberToFind = null;

while ($imin < $imax) {
    $middle = round(($imin + $imax) / 2);

    if ($values[$middle] === $numberToFind) {
        $indexOfNumberToFind = $middle;
        break;
    } elseif ($values[$middle] < $numberToFind) {
        $imin = $middle + 1;
    } else {
        $imax = $middle - 1;
    }
}

if (null !== $indexOfNumberToFind) {
    echo "Trouvé à l'index : " . $indexOfNumberToFind . " Value : " . $values[$indexOfNumberToFind] . PHP_EOL;
} else {
    echo "N'existe pas";
}
