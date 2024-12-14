<?php

function is_prime(int $n): bool {
    if($n <= 1)
        return false;
    if($n == 2)
        return true;

    if($n % 2 == 0)
        return false;
    $limit = sqrt($n);
    for($i = 3; $i <= $limit;$i++)
    {
        if($n % $i == 0)
            return false;
    }
    return true;
  }

  echo is_prime(8);
?>