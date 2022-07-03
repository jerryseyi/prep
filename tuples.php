<?php

function makeTuples(array $input): array
{
    $answer = [];
    $length = count($input);

    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length; $j++) {
            $answer[][] = $input[$i].$input[$j];
//            array_push($answer, $input[$i], $input[$j]);
        }
    }
    return $answer;
}

//print_r(makeTuples([1, 2, 3]));

// O n^2

function getMiddleArray(array $arr)
{
    return $arr[floor(count($arr) / 2)];
}

echo getMiddleArray([1, 2, 3, 4]);
// constant time (0 of 1)