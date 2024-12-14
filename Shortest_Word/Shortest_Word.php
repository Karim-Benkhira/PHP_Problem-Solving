<?php

function findShort(string $str) : int
{
    $words = explode(" ",$str);

    $strlenWord = array_map('strlen',$words);

    return min($strlenWord);
}

echo findShort("karim benkhira");
?>