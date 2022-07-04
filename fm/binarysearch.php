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

