<?php

use App\BST\BST;

include "../../error.php";

require "../../vendor/autoload.php";

$tree = new BST(10);

$tree->insert(12);
$tree->insert(6);
$tree->insert(3);
$tree->insert(8);
$tree->insert(15);
$tree->insert(13);
$tree->insert(36);
$tree->remove(15);
$tree->traverse($tree->root);

echo "\n";
echo "\n";
echo $tree->search(14) ? "Found" : "Not Found";
echo "\n";
echo $tree->search(36) ? "Found" : "Not Found";

echo '<pre>';
$tree->otraverse($tree->root, 'pre-order');
echo "\n";
$tree->otraverse($tree->root, 'in-order');
echo "\n";
$tree->otraverse($tree->root, 'post-order');
echo "\n";
echo '</pre>';