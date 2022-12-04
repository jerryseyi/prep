<?php

namespace App\BinaryTree;

class BinaryTree
{
    public ?BinaryNode $root = null;

    /**
     * @param BinaryNode|null $node
     */
    public function __construct(?BinaryNode $node)
    {
        $this->root = $node;
    }

    public function traverse(?BinaryNode $node, int $level = 0): void
    {
        if ($node) {
            echo '<pre>';
                echo str_repeat("-", $level);
                echo $node->data . "\n";
            echo '</pre>';
            if ($node->left) {
                $this->traverse($node->left, $level + 1);
            }

            if ($node->right) {
                $this->traverse($node->right, $level + 1);
            }
        }
    }
}