<?php

function countdown($x)
{
    if ($x == 0) {
        print('done');
        return;
    }
    print($x . ' not yet done') . "\n";
    countdown($x-1);
}

function power($num, $pow)
{
    if ($pow == 0) {
        return 1;
    } else {
        return $num * power($num, $pow - 1);
    }
}

function factorial($n)
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo power(5, 3) . "\n";
echo factorial(4) . "\n";
echo factorial(0) . "\n";

countdown(4);