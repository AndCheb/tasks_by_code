<?php

$a = 3;
$b = 3;

$result = sqrt($a * $b);

function geometric_mean($x, $y)
{
  return sqrt($x * $y);
}

echo geometric_mean($a, $b);