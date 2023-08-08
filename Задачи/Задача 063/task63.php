<?php

$n = 7;
$result = 1;

for ($i = 2; $i < $n; $i++)
  $result += 1 / $i;
  
$result = +number_format($result, 2);