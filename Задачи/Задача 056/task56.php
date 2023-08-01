<?php

$a = 5;
$b = 5;

if ($a === $b)
{
  $n = $a;
  $a += $b;
  $b += $n;
}
else
{
  $a = 0;
  $b = 0;
}
 