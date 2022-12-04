<?php

include "db.php";

$result = $dbh->query("select * from categories order by parentCategory asc, sortInd asc", PDO::FETCH_OBJ);

$categories = [];

foreach ($result as $row) {
    $categories[$row->parentCategory][] = $row;
}


function showCategoryTree(array  $categories, int $n) {
    if (isset($categories[$n])) {
        foreach ($categories[$n] as $category) {
            echo str_repeat(".", $n)." ".$category->categoryName . "\n";
            showCategoryTree($categories, $category->id);
        }
    }
    return;
}

showCategoryTree($categories, 0);