<?php

$values = [2, 5, 10, 13, 1, 18, 16, 19];


$length = count($values);

for ($i = 0; $i < $length; $i++) {
    $isPrime = true;

    if ($values[$i] < 2 || ($values[$i] > 2 && ($values[$i] & 1) === 0)) {
        $isPrime = false;
    } else {
        for ($j = 2; $j <= sqrt($values[$i]); $j++) {
            if ($values[$i] % $j === 0) {
                $isPrime = false;
                break;
            }
        }
    }

    print($isPrime ? $values[$i] ." is a prime number" ."\n" :
                       $values[$i] . " is not a prime number" . "\n");
}
