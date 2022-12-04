<?php

namespace App\BST;

class Node
{
    public ?int $data;
    public ?Node $left;
    public ?Node $right;
    public ?Node $parent;

    /**
     * @param int|null $data
     */
    public function __construct(int $data = null, Node $parent = null)
    {
        $this->data = $data;
        $this->parent = $parent;
        $this->left = null;
        $this->right = null;
    }

    public function min(): Node
    {
        $node = $this;

        while ($node->left) {
            $node = $node->left;
        }

        return $node;
    }

    public function max(): Node
    {
        $node = $this;

        while ($node->right) {
            $node = $node->right;
        }

        return $node;
    }

    public function successor(): ?Node
    {
        $node = $this;

        return $node->right?->min();
    }

    public function predecessor(): ?Node
    {
        $node = $this;

        return $node->left?->max();
    }

    public function delete(): void
    {
        $node = $this;

        if (! $node->left && ! $node->right) {
            if ($node->parent->left === $node) {
                $node->parent->left = null;
            } else {
                $node->parent->right = null;
            }
        } elseif ($node->left && $node->right) {
            $successor = $node->successor();
            $node->data = $successor->data;
            $successor->delete();
        } elseif ($node->left) {
            if ($node->parent->left === $node) {
                $node->parent->left = $node->left;
                $node->left->parent = $node->parent->left;
            } else {
                $node->parent->right = $node->left;
                $node->left->parent = $node->parent->right;
            }
            $node->left = null;
        } elseif ($node->right) {
            if ($node->parent->left === $node) {
                $node->parent->left = $node->right;
                $node->right->parent = $node->parent->left;
            } else {
                $node->parent->right = $node->right;
                $node->right->parent = $node->parent->right;
            }
            $node->right = null;
        }
    }
}