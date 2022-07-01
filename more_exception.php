<?php

class Calculator
{
    public function __construct()
    {
    }

    public function power($n, $p)
    {
        if ($n < 0 || $p < 0) {
            throw new Exception('n and p should be non-negative');
        }

        return pow($n, $p);
    }
}

$calc = new Calculator();

$str = "10 40";
$count = 2;

while ($count-- > 0) {
    list($n, $p) = explode(",", $str);
    var_dump($p);
    try {
        $ans = $calc->power($n, $p);
        echo $ans . "\n";
    } catch (Exception $e) {
        echo $e->getMessage() . "\n";
    }
}