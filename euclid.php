<?php

function euclid($a, $b)
{
    while ($b != 0) {
        $temp = $a;
        $a = $b;
        $b = $temp % $b;
    }

    return $a;

}

echo euclid(20, 4) . "\n";
echo euclid(60, 96);