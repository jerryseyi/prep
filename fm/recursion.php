<?php

function countTo($max, $current, $list = null)
{
    if ($current > $max) return;
    echo $current . "\n";
    countTo($max, $current + 1);
}

//countTo(10, 1);

function fibonacci($num): int
{
    if ($num === 2 || $num === 1) {
        return 1;
    } else if ($num <= 0) {
        return 0;
    }

    return fibonacci($num - 1) + fibonacci($num - 2);
}

//echo fibonacci(19);

function fibonacciFn($num): int
{
    $sequence = [0, 1];

    for ($i = 2; $i < $num + 1; $i++) {
        $sequence[] = $sequence[$i - 2] + $sequence[$i - 1];
    }

    return $sequence[$num];
}

function nestedAdd(array $arr)
{
    $len = count($arr);
    $sum = 0;

    for ($i = 0; $i < $len; $i++) {
        if (is_array($arr[$i])) {
            $sum += nestedAdd($arr[$i]);
        } else {
            $sum += $arr[$i];
        }
    }

    return $sum;
}

//echo nestedAdd([10, [12, 14, [1], [16, [20]]], 10, 11]);
echo nestedAdd([]);