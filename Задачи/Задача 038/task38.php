<?php

$n = 27;

function pow3($x) {
  $i = 1;

  while($i < $x) {
    if (pow(3, $i) === $x) return 'true';
    $i++;
  }
  
  return 'false';
}