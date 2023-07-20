<?php

function volume_of_parallelepiped($a, $b, $c) 
{
  return $a * $b * $c;
}

function surface_area_of_the_parallelepiped($a, $b, $c) 
{
  return 2 * ($a * $b + $b * $c + $a * $c);
}