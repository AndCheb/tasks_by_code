<?php

$a = 2;
$b = 4;
$c = 3;

function sumRange($x, $y)
{
  if ($x > $y) return 0;
  $sum = 0;
  for ($i = $x; $i <= $y; $i++)
  {
    $sum += $i;
  }
  return $sum;
}