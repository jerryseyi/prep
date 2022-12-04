<?php

namespace App\BinaryTree;

class BinaryNode
{
    public ?string $data;
    public ?BinaryNode $left;
    public ?BinaryNode $right;

    /**
     * @param string|null $data
     */
    public function __construct(string $data = null)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }

    public function addChildren(BinaryNode $left, BinaryNode $right): void
    {
        $this->left = $left;
        $this->right = $right;
    }


}