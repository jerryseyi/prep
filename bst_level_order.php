<?php

class Node
{
    public $left, $right, $data;

    /**
     * @param $data
     */
    public function __construct($data)
    {
        $this->left = $this->right = null;
        $this->data = $data;
    }
}

class Solution
{
    function insert($root, $data) {
        if ($root == null) {
            return new Node($data);
        } else {
            if ($data <= $root->data) {
                $cur = $this->insert($root->left, $data);
                $root->left = $cur;
            } else {
                $cur = $this->insert($root->right, $data);
                $root->right = $cur;
            }
            return $root;
        }
    }

    public function levelOrder($root)
    {
        $data = [];
        $queue[] = $root;

        while (! empty($queue)) {
            $curr = array_shift($queue);
            $data[] = (int)$curr->data;

            if ($curr->left !== null) {
                $queue[] = $curr->left;
            }

            if ($curr->right !== null) {
                $queue[] = $curr->right;
            }
        }

        echo implode(' ', $data);
    }
}

$tree = new Solution();
$root = null;

$files = [12, 6, 3, 8, 15, 13, 36];
$count = count($files);
$index = 0;

while ($count-- > 0) {
    $root = $tree->insert($root, $files[$index]);
    $index++;
}

$tree->levelOrder($root);