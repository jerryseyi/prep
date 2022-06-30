<?php

function staircase($num) {
    for ($i = 0; $i < $num; $i+=1) {
        echo  str_repeat("#", $num-$i) . "\n";
    }
}

staircase(4);