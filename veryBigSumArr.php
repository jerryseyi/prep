<?php

function arrSum($arr) {
    $sum = 0;

    foreach ($arr as $item) {
        $sum += $item;
    }

    return $sum;
}


$ar = [1000000001,1000000002,1000000003,1000000004,1000000005];
var_dump($ar);
