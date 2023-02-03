<?php

function binarySearch(array $numbers, int $needle, int $low, int $high) : bool
{
    if ($high < $low) {
        return false;
    }

    $mid = (int) (($low + $high) / 2);

    if ($numbers[$mid] > $needle) {
        return binarySearch($numbers, $needle, $low, $mid - 1);
    } elseif ($numbers[$mid] < $needle) {
        return binarySearch($numbers, $needle, $mid + 1, $high);
    } else {
        return true;
    }
}