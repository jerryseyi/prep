<?php

function binarySearch(array $numbers, int $needle) :bool {
    $low = 0;
    $high = count($numbers) - 1;

    while ($low <= $high) {
        $mid = (int) (($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } elseif ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return true;
        }
    }

    return false;
}

$numbers = range(1, 200, 5);
$number = 31;

if (binarySearch($numbers, $number) !== false) {
    echo "$number found \n";
} else {
    echo "$number not found \n";
}

$number = 500;
if (binarySearch($numbers, $number) !== false) {
    echo "$number found \n";
} else {
    echo "$number not found \n";
}