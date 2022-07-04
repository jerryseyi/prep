<?php

function search(array $numbers, int $needle): bool
{
    $totalItems = count($numbers);

    for ($i = 0; $i < $totalItems; $i++) {
        if ($numbers[$i] === $needle) return true;;
    }

    return false;
}

$num = range(1, 200, 5);
print_r($num);

if (search($num, 36)) {
    echo "Found";
} else {
    echo "Not Found";
}