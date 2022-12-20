<?php

function bubbleSort(array $arr): array
{
    $len = count($arr);

    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }

    return $arr;
}

/**
 * @param array $arr
 * @return array
 */
function secondBubbleSort(array $arr): array
{
    $len = count($arr);

    for ($i = 0; $i < $len; $i++) {
        $swapped = false;
        for ($j = 0; $j < $len - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
                $swapped = true;
            }
        }
        if (!$swapped) break;
    }

    return $arr;
}

/**
 * final improved version of bubbleSort
 *
 * @param array $arr
 * @return array
 */
function finalBubbleSort(array $arr): array
{
    $len = count($arr);

    for ($i = 0; $i < $len; $i++) {
        $swapped = false;
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
                $swapped = true;
            }
        }
        if (!$swapped) break;
    }

    return $arr;
}

function lastBubbleSort(array $arr): array
{
    $len = count($arr);
    $count = 0;
    $bound = $len - 1;

    for ($i = 0; $i < $len; $i++) {
        $swapped = false;
        $newBound = 0;
        for ($j = 0; $j < $bound; $j++) {
            $count++;
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
                $swapped = true;
                $newBound = $j;
            }
        }
        $bound = $newBound;
        if (!$swapped) break;
    }
    echo $count . "\n";
    return $arr;
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
$sortedArr = finalBubbleSort($arr);
echo implode(",", $sortedArr);