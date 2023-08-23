<?php

$n = 5;
$a = 12;
$d = 5;

$result = [$a, $a + $d];

for ($i = 2; $i <= $n; $i++)
{
  array_push($result, $a + $i * $d);
}