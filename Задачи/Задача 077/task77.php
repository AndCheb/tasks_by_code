<?php

$rectangles =
[
  [3, 5],
  [2, 3],
  [2, 6],
  [4, 3]
];

$area = [];

foreach ($rectangles as $values)
{
  array_push($area, 2 * ($values[0] + $values[1]));
};

$result = 
[
  $rectangles[array_search(min($area), $area)][0],
  $rectangles[array_search(min($area), $area)][1]
];