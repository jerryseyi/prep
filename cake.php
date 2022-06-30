<?php

function cakes($candles) {
    $max = 0;
    $res = [];

    foreach ($candles as $candle) {
        $res[$candle]++;
        if ($candle > $max) {
            $max = $candle;
        }
    }

    return $res[$max];
}