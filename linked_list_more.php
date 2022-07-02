<?php

class Node
{
    public $data;
    public $next;

    /**
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

}

class Solution
{
    function removeDuplicates($head)
    {
        $currentNode = $head;

        while($currentNode != null && $currentNode->next != null) {
            $node = $currentNode;
            while ($node->next != null) {
                if ($node->next->data === $currentNode->data) {
                    $next = $node->next->next;
                    $node->next = $next;
                } else {
                    $node = $node->next;
                }
            }

            $currentNode = $currentNode->next;
        }
        return $head;
    }

    public function insert($head, $data)
    {
        $node = new Node($data);
        if ($head == null) {
            $head = $node;
            return $head;
        } else {
            if ($head->next == null) {
                $head->next = $node;
            } else {
                $start = $head;
                while($start->next !== null) {
                    $start = $start->next;
                }
                $start->next = $node;
            }
        }

        return $head;
    }

    public function display($head)
    {
        $start = $head;
        while ($start) {
            echo $start->data, ' ';
            $start = $start->next;
        }
    }
}

$head = null;
$list = new Solution();

$files = ['Able', 'Ability', 'mindset', 'Able'];
$count = count($files);
$index = 0;

while ($count > 0) {
    $head = $list->insert($head, $files[$index]);
    $count--;
    $index++;
}

$head = $list->removeDuplicates($head);
$list->display($head);