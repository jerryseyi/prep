<?php

function bubbleSort($nums)
{
    $swapped = false;
    $len = count($nums);

     do {
         $swapped = false;
         for ($i = 0; $i < $len - 1; $i++) {
             if ($nums[$i] > $nums[$i + 1]) {
                 $temp = $nums[$i];
                 $nums[$i] = $nums[$i + 1];
                 $nums[$i + 1] = $temp;
                 $swapped = true;
             }
         }
     } while($swapped);

     return $nums;
}
$arr = [10, 5, 3, 8, 2, 6, 4, 7, 9, 1];

print_r(bubbleSort($arr));