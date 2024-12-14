<?php

function longest($a, $b) {
 
    $merged = $a . $b;

    $split = str_split($merged);
    $unique_sorted = array_unique($split);
    sort($unique_sorted);

    return implode("",$unique_sorted);
}

$a = "abbbccccdefww";
$b = "xxxxyyyyabklmogfrhfgpq";
echo longest($a, $b);


?>