<?php

function compare_trip($arr1, $arr2) {
    $alice = 0;
    $bob = 0;

    for ($i = 0; $i < count($arr1); $i++) {
        if ($arr1[$i] > $arr2[$i]) {
            $alice++;
        } else if ($arr1[$i] < $arr2[$i]) {
            $bob++;
        } else {
            continue;
        }
    }

    return [$alice, $bob];
}

$arr1 = [4, 3, 4];
$arr2 = [2, 4, 5];

var_dump(compare_trip($arr1, $arr2));



