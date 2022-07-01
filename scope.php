<?php

class Difference {
    public $maxmumDifference;
    private $elements = [];

    public function __construct($a)
    {
        $this->elements = $a;
    }

    public function computeDifference()
    {
        $count = count($this->elements);
        $sum = [];

        for ($i = 0; $i < $count; $i++) {
            for ($k = $i + 1; $k < $count; $k++) {
                if (isset($this->elements[$i]) && isset($this->elements[$k])) {
                    $sum[] = abs($this->elements[$i] - $this->elements[$k]);
                }
            }
        }

        $this->maxmumDifference = max($sum);
    }
}

$val = [2, 10, 4, 30];

$diff = new Difference($val);
$diff->computeDifference();
echo $diff->maxmumDifference;