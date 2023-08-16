<?php

$nums = [10, 3, 21, -3, 0];

sort($nums);

$result = (object) 
  [
    'max' => max($nums),
    'min' => min($nums)
  ];

echo $result->max . "\n" . $result->min;