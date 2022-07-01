<?php

$n = ['h', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd'];

$len = count($n);

function swap($a, $left, $right)
{
    $old = $a[$right];
    $a[$right] = $a[$left];
    $a[$left] = $old;

    return $a;
}

$numberOfSwaps = 0;

for ($i = 0; $i < $len; $i++) {
    for ($j = 0; $j < $len - 1 - $i; $j++) {
        if ($n[$j + 1] < $n[$j]) {
            $n = swap($n, $j, $j+1);
            $numberOfSwaps++;
        }
    }
}

print('Number of swaps is ' . $numberOfSwaps) . "\n";
print('First Element: ' . current($n)) . "\n";
print('Last Element: ' . end($n)) . "\n";
var_dump($n);