<?php

function find($needle, array $haystack): bool
{
    for ($i = 0; $i < count($haystack); $i++) {
        if ($haystack[$i] === $needle) return true;
    }
    return false;
}

// big O of n