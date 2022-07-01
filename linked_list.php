<?php

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class Solution
{
    function insert($head, $data)
    {
        $node = new Node($data);

        if ($head == null) {
            $head = $node;
            return $head;
        }

        $temp = $head;
        while ($temp->next !== null) {
            $temp = $temp->next;
        }

        $temp->next = $node;

        return $head;
    }

    function display($head)
    {
        $start = $head;
        while ($start) {
            echo $start->data, ' ' . "\n";
            $start = $start->next;
        }
    }
}

$head = null;
$list = new Solution();

$files = ['Able', 'Ability', 'mindset'];
$count = count($files);
$index = 0;

while ($count > 0) {
    $head = $list->insert($head, $files[$index]);
    $count--;
    $index++;
}

$list->display($head);