<?php

interface AdvancedArithmetic
{
    public function divisorSum($n);
}

class Calculator implements AdvancedArithmetic
{

    public function divisorSum($n)
    {
        $res = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i === 0) {
                $res[] = $i;
            }
        }

        var_dump($res);
        return array_sum($res);
    }
}

$calc = new Calculator();

if ($calc instanceof AdvancedArithmetic) {
    $sum = $calc->divisorSum(20);
    echo $sum;
} else {
    echo 'Wrong answer';
}