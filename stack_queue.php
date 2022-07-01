<?php

class Solution
{
    private $stack = [];
    private $queue = [];

    public function pushCharacter($stack)
    {
        $this->stack[] = $stack;
    }

    public function enqueueCharacter($queue)
    {
        $this->queue[] = $queue;
    }

    public function popCharacter()
    {
        return array_pop($this->stack);
    }


    public function dequeueCharacter()
    {
        return array_shift($this->queue);
    }
}

$word = "I am an overcomer";
$obj = new Solution();

$len = strlen($word);
$isPalindrome = true;

for ($i = 0; $i < $len; $i++) {
    $obj->enqueueCharacter($word[$i]);
    $obj->pushCharacter($word[$i]);
}


for ($i = 0; $i < $len / 2; $i++) {
    if ($obj->popCharacter() != $obj->dequeueCharacter()) {
        $isPalindrome = false;

        break;
    }
}

if ($isPalindrome) {
    echo 'The word, ' . $word . ', is a palindrome.';
} else {
    echo 'The word, ' . $word . ', is not a palindrome';
}