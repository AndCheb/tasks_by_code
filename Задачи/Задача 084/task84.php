<?php

$nums = [1, 2, 3, 4, 5, 6];

$odd_nums = [];

foreach ($nums as $item)
{
  if ($item % 2 !== 0)
    array_push($odd_nums, $item);
}