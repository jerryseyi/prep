<?php

function diagonalDiff($arr) {
    $length = count($arr);
    $lastIndex = $length - 1;
    $firstDiag = 0;
    $secondDiag = 0;

    for ($i = 0; $i < $length; $i+=1) {
        $firstDiag += $arr[$i][$i];
        $secondDiag += $arr[$i][$lastIndex--];
    }

    return abs($firstDiag - $secondDiag);
}


$arr = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
];

var_dump(diagonalDiff($arr));