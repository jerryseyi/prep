<?php

$newNum = base_convert(5, 10, 2);

$count = 0;
$max = 0;

for ($i = 0; $i < strlen($newNum); $i+=1) {
    if ((int)$newNum[$i] === 1) {
        $count++;
    } else {
        if ($count > $max) {
            $max = $count;
        }
        $count = 0;
    }
}

print (max($max, $count));