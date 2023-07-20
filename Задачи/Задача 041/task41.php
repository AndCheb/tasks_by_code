<?php

function evenDigit($d)
{
  return $d % 2 === 0 ? 'true' : 'false';
}

$arr = [7, 7, 1, 1, 1, 2, 3, 3, 3, 4];
$even = 0;

for ($i = 0; $i < count($arr); $i++)
{
  if (evenDigit($arr[$i]) == 'true') $even++;
}