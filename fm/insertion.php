<?php

function insertion($nums)
{
    $len = count($nums);
    echo $len;
    for ($i = 1; $i < $len; $i++) {
        $numberToInsert = $nums[$i];
        for ($j = $i - 1; $j >= 0 && $nums[$j] > $numberToInsert; $j--) {
            $nums[$j + 1] = $nums[$j];
        }

        $nums[$j + 1] = $numberToInsert;
    }

    return $nums;
}

$arr = [10, 5, 3, 8, 2, 6, 4, 7, 9, 1];

print_r(insertion($arr));