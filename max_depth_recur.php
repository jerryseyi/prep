<?php

function maxDepth(): void
{
    static $i = 0;
    print ++$i . "\n";
    maxDepth();
}

maxDepth();