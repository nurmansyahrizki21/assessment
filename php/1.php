<?php

function getPrimes($n) {
  $primes = array();

  for ($i = 2; $i<$n; $i++) {
    $count = 0;
    for ($j = 2; $j<$i; $j++) {
      if (($i % $j) == 0) {
        $count++;
      }
    }
    if ($count == 0) {
      array_push($primes, $i);
    }
  }
  return $primes;
}

echo print_r(getPrimes(15));

