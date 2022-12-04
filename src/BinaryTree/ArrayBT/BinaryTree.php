<?php

namespace App\BinaryTree\ArrayBT;

class BinaryTree
{
    public array $nodes = [];

    /**
     * @param array $nodes
     */
    public function __construct(array $nodes)
    {
        $this->nodes = $nodes;
    }

    public function traverse(int $num = 0, int $level = 0): void
    {
        if (isset($this->nodes[$num])) {
            echo '<pre>';
                echo str_repeat("-", $level);
                echo $this->nodes[$num] . "\n";
            echo '</pre>';
            $this->traverse(2 * $num + 1, $level + 1);
            $this->traverse(2 * ($num + 1), $level + 1);
        }
    }
}

$nodes = [];
$nodes[] = "Final";
$nodes[] = "Semi Final 1";
$nodes[] = "Semi Final 2";
$nodes[] = "Quarter Final 1";
$nodes[] = "Quarter Final 2";
$nodes[] = "Quarter Final 3";
$nodes[] = "Quarter Final 4";

$atree = new BinaryTree($nodes);
$atree->traverse();