<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function sum($carry, $item)
{
  $carry += $item;
  return $carry;
}

$result = array_reduce($nums, 'sum') / count($nums);