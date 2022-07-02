<?php

class Node
{
    public $left, $right;
    public $data;

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
    public function insert($root, $data)
    {
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

    public function getHeight($root)
    {
        if ($root === null) {
            return -1;
        }

        $leftHeight = $this->getHeight($root->left);
        $rightHeight = $this->getHeight($root->right);

        if ($leftHeight > $rightHeight) {
            $maxHeight = ++$leftHeight;
        } else {
            $maxHeight = ++$rightHeight;
        }

        return $maxHeight;
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

$height = $tree->getHeight($root);
echo $height;