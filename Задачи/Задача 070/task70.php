<?php

$unit = 3;
$length = 5.55;

function length_in_merers($u, $l)
{
  switch($u)
  {
    case 1: return $l / 10;
    case 2: return $l * 1000;
    case 3: return $l;
    case 4: return $l / 1000;
    case 5: return $l / 100;
    default: return 'unknown value';
  }
}