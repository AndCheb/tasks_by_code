<?php

$a = 3; // side of the square
$b = 4; // side of the square

$S = $a * $b; // rectangle area
$P = ($a + $b) * 2; // rectangle perimeter

// a function that calculates the area of a rectangle
function rectangle_area($x, $y) 
{
  return $x * $y;
}

// a function that calculates the perimeter of a rectangle
function rectangle_perimeter($x, $y)
{
  return ($x + $y) * 2;
}