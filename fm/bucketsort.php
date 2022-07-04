<?php

function bucketsort(array &$arr)
{
    $n = count($arr);
    if ($n <= 0) return;

    $min = min($arr);
    $max = max($arr);
    $bucket = [];
    $bucketLen = $max - $min + 1;

    $bucket = array_fill(0, $bucketLen, []);

    for ($i = 0; $i < $bucketLen; $i++) {
        $bucket[$arr[$i] - $min][] = $arr[$i];
    }

    $k = 0;
    for ($i = 0; $i < $bucketLen; $i++) {
        $bucketCount = count($bucket[$i]);

        for ($j = 0; $j < $bucketCount; $j++) {
            $arr[$k] = $bucket[$i][$j];
            $k++;
        }
    }
}