<?php

function crossAdd(array $input): array
{
    $answer = [];
    for ($i = 0; $i < count($input); $i++) {
        $goingUp = $input[$i];
        $goingDown = $input[count($input) - 1 - $i];
        $answer[] = $goingUp + $goingDown;
    }

    return $answer;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

var_dump(crossAdd($arr));

// big O of n^2