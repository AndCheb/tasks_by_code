<?php

$A = -5;
$B = 1;

if ($A < $B)
  for ($i = $A, $j = 1; $i <= $B; $i++, $j++) {
    echo "$i\n";
    if ($i === $B) echo "Всего чисел: $j";
  }