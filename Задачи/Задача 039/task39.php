<?php

$a = [1, 2, 3, 4, 5];

function PowA234($A)
{
  for ($i = 0; $i < count($A); $i++)
  {
    echo $A[$i] ** 2 . ' ' . $A[$i] ** 3 . ' ' . $A[$i] ** 4 . "\n";
  }
}