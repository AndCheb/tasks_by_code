<?php

$nums = [25, 33, 49, 51, 55, 64, 76, 89, 95, 101];

function is_square($arr)
{
  $result = 0;
  foreach ($arr as $num)
  {
    if (((int)sqrt($num) * (int)sqrt($num)) === $num)
    {
      $result++;
    }
  }
  return $result;
}