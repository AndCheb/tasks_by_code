<?php

$details = [
  [ 8, 4 ],
  [ 4, 2 ],
  [ 9, 1 ],
  [ 1, 1 ],
  [ 6, 3 ],
];

function maximum_denisty($items)
{
  $denisty = [];

  foreach ($items as $detail)
  {
    array_push($denisty, $detail[0] / $detail[1]);
  }
	
  $position = (array_search(max($denisty), $denisty)) + 1;
	
  return [$position, max($denisty)];	
}