<?php

$arr = [];

for ($i = 0; $i < 6; $i++) {
    $items = [
        [1, 2, 10],
        [30, 20, 100],
        [1, 1, 10],
        [1, 5, 10],
        [1, 15, 10],
        [11, 25, 10],
    ];

    foreach ($items as $k => $item) {
        $arr[$i][$k] = $item;
    }
}

$sums = [];

for ($i = 0; $i < 4; $i++) {
    for ($x = 0; $x < 4; $x++) {
        $top = $arr[$i][$x] + $arr[$i][$x + 1] + $arr[$i][$x + 2];
        $middle = $arr[$i + 1][$x + 1];
        $bottom = $arr[$i + 2][$x] + $arr[$i + 2][$x + 1] + $arr[$i + 2][$x + 2];

        $sum = $top + $middle + $bottom;
        $sums[] = $sum;
    }
}

print_r($sums);