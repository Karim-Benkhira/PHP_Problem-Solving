<?php

function score($dice)
{
  $point = 0;

  $count = array_count_values($dice);

  if (isset($count[1]) && $count[1] >= 3) {
    $point += 1000;
    $count[1] -= 3; 
  }

  if (isset($count[6]) && $count[6] >= 3) {
    $point += 600;
    $count[6] -= 3; 
  }

  if (isset($count[5]) && $count[5] >= 3) {
    $point += 500;
    $count[5] -= 3; 
  }

  if (isset($count[4]) && $count[4] >= 3) {
    $point += 400;
    $count[4] -= 3; 
  }

  if (isset($count[3]) && $count[3] >= 3) {
    $point += 300;
    $count[3] -= 3; 
  }

  if (isset($count[2]) && $count[2] >= 3) {
    $point += 200;
    $count[2] -= 3; 
  }

  
  if (isset($count[1])) {
    $point += $count[1] * 100; 
  }

  if (isset($count[5])) {
    $point += $count[5] * 50;  
  }

  return $point;
}


// $test = [2, 3, 1, 5, 5]; 
// echo "point " . score($test); 

?>
