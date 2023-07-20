<?php

$x = 2;

function num($x) {
  return $x > 0 ? ++$x : ($x < 0 ? $x -= 2 : 10);
}

echo $x = num($x);