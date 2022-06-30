<?php

function review($count, $data) {
    for ($k = 0; $k < $count; $k+=1) {
        $even = [];
        $odd = [];

        $length = strlen($data);

        for ($i = 0; $i < $length; $i++) {
            if ($i % 2 === 0) {
                $odd[] = $data[$i];
            } else {
                $even[] = $data[$i];
            }
        }
        echo implode('', $odd) . ' ' . implode('', $even);
    }
}

review(5, 'God is good.');