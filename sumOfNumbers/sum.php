<?php

function getSum(int $a, int $b): int{
    
    $min = min($a,$b);

    $max = max($a,$b);

    return array_sum(range($min,$max));
}


echo getSum(1,0) ."<br>";
echo getSum(1,2) ."<br>";
echo getSum(0,1) ."<br>";
echo getSum(1,1) ."<br>";
echo getSum(-1,0) ."<br>";
echo getSum(-1,2) ."<br>";
