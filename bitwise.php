<?php

function bitwise($n, $k)
{
    $result = 0;

    for ($a = 1; $a <= 1; $a++) {
        for ($b = $a + 1; $b <= $n; $b++) {
            $current = $a & $b;
            if ($current > $result && $current < $k) {
                $result = $current;
            }
        }
    }

    return $result;
}

$arr ="I am a warrior";
$len = strlen($arr);

for ($i = 0; $i < $len; $i++) {
    $nk = explode(' ', $arr);
    $n = intval($nk[0]);
    $k = intval($nk[1]);

    print(bitwise($n, $k));
}