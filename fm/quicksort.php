<?php

function quicksort(array &$arr, int $p, $r) {

    if ($p < $r) {
        $q = partitioning($arr, $p, $r);
        quicksort($arr, $p, $q);
        quicksort($arr, $q + 1, $r);
    }
}

function partitioning(array &$arr, int $p, int $r)
{
    $pivot = $arr[$p];
    $i = $p - 1;
    $j = $r + 1;

    while (true) {
        do {
            $i++;
        } while ($arr[$i] < $pivot);

        do {
            $j--;
        } while ($arr[$j] > $pivot);

        if ($i < $j) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        } else {
            return $j;
        }
    }
}

$arr = [10, 5, 3, 8, 2, 6, 4, 7, 9, 1];
quicksort($arr, 0, count($arr) - 1);


echo implode(",", $arr);

//function anotherQuicksort(array $arr)
//{
//    $len = count($arr);
//    if ( $len <= 1) return $arr;
//
//    $pivot = $arr[$len - 1];
//
//    $left = [];
//    $right = [];
//
//    for ($i = 0; $i < $len - 1; $i++) {
//        if ($arr[$i] < $pivot) {
//            $left[] = $arr[$i];
//        } else {
//            $right[] = $arr[$i];
//        }
//    }
//
//    $sortedLeft = anotherQuicksort($left);
//    $sortedRight = anotherQuicksort($right);
//
//    return array_merge($sortedLeft, $sortedRight);
//}
//
//print_r(anotherQuicksort($arr));