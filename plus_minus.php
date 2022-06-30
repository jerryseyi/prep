<?php

function plusMinus($arr) {
    $positive = 0;
    $negative = 0;
    $zero = 0;
    $length = count($arr);

    foreach ($arr as $value) {
        if ($value === 0) {
            $zero+=1;
        } else if ($value > 0) {
            $positive += 1;
        } else {
            $negative += 1;
        }
    }

    $newArr = [$positive, $negative, $zero];

    foreach ($newArr as $val) {
        echo number_format($val/$length, 6);
        echo "\n";
    }
}

$arr = [-1, 0, 2, 3, 4];

plusMinus($arr);
