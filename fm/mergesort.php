<?php

function mergeSort(array $nums) :array
{
    $length = count($nums);

    if ($length == 1) {
        return $nums;
    }

    $middle = floor($length / 2);
    $left = array_slice($nums, 0, $middle);
    $right = array_slice($nums, $middle);

    $sortedLeft = mergeSort($left);
    $sortedRight = mergeSort($right);

     return merge($sortedLeft, $sortedRight);
}

function merge(array $left, array $right) : array
{
    $results = [];
    $leftLength = count($left);
    $rightLength = count($right);
    $leftIndex = $rightIndex = 0;

    while ($leftIndex < $leftLength && $rightIndex < $rightLength) {
        if ($left[$leftIndex] > $right[$rightIndex]) {
            $results[] = $right[$rightIndex];
            $rightIndex++;
        } else {
            $results[] = $left[$leftIndex];
            $leftIndex++;
        }
    }

    while ($leftIndex < $leftLength) {
        $results[] = $left[$leftIndex];
        $leftIndex++;
    }

    while ($rightIndex < $rightLength) {
        $results[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $results;
}

print_r(mergeSort([10, 5, 3, 8, 2, 6, 4, 7, 9, 1]));