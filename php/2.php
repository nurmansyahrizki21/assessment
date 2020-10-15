<?php 
    $table = array_fill(0, $n + 1, NULL); 
    $table[0] = 1; 
    for ($i = 1; $i < $n; $i++) {
        for ($j = $i; $j <= $n; $j++) {
            $table[$j] += $table[$j - $i];
        }
    } 
  
?> 