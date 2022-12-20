<?php

namespace App\BST;

class BST
{
    public ?Node $root = null;

    /**
     * @param int $data
     */
    public function __construct(int $data)
    {
        $this->root = new Node($data);
    }

    public function isEmpty(): bool
    {
        return $this->root === null;
    }

    public function insert(int $data): Node
    {
        if ($this->isEmpty()) {
            $node = new Node($data);
            $this->root = $node;
            return $node;
        }

        $node = $this->root;

        while ($node) {
            if ($data > $node->data) {
                if ($node->right) {
                    $node = $node->right;
                } else {
                    $node->right = new Node($data, $node);
                    $node = $node->right;
                    break;
                }
            } elseif ($data < $node->data) {
                if ($node->left) {
                    $node = $node->left;
                } else {
                    $node->left = new Node($data, $node);
                    $node = $node->left;
                    break;
                }
            } else {
                break;
            }
        }

        return $node;
    }

    public function traverse(?Node $node): void
    {
        if ($node) {
            if ($node->left)
                $this->traverse($node->left);
            echo '<pre>';
            echo $node->data . "\n";
            echo '</pre>';
            if ($node->right) {
                $this->traverse($node->right);
            }
        }
    }

    /**
     * @param int $data
     * @return Node|bool|null
     */
    public function search(int $data): Node|bool|null
    {
        if ($this->isEmpty()) {
            return false;
        }

        $node = $this->root;

        while ($node) {
            if ($data > $node->data) {
                $node = $node->right;
            } elseif ($data < $node->data) {
                $node = $node->left;
            } else {
                break;
            }
        }

        return $node;
    }

    public function remove(int $data): void
    {
        $node = $this->search($data);
        if ($node) $node->delete();
    }

}