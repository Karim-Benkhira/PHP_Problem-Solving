<?php

function toJadenCase(string $string): string
{
    $words = explode(" ", $string);

    $upperWords = array_map('ucwords', $words);
    
    return implode(" ", $upperWords);
}

echo toJadenCase("How can mirrors be real if our eyes aren't real");
?>
