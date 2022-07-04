<?php

// normal loop

function binarySearchLoop(array $numbers, int $needle)
{
    $low = 0;
    $high = count($numbers) - 1;

    while ($low <= $high) {
        $mid = (int) (($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return true;
        }
    }

    return false;
}

echo binarySearchLoop(range(1, 200, 5), 31);


function binarySearchRecursive(array $arr, int $needle, int $low, int $high): bool
{
    if ($high < $low) return false;

    $mid = (int) (($low + $high) / 2);

    if ($arr[$mid] > $needle) {
        return binarySearchRecursive($arr, $needle, $low, $mid - 1);
    } else if ($arr[$mid] < $needle) {
        return binarySearchRecursive($arr, $needle, $mid + 1, $high);
    } else {
        return true;
    }
}