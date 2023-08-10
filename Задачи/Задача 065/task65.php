<?php

$a = 32;
$b = 29;
$c = 43;

$result = $a;

if ((($b > $a) && ($b < $c)) ||
   (($b < $a) && ($b > $c))) $result = $b;
if ((($c > $a) && ($c < $b)) ||
   (($c < $a) && ($c > $b))) $result = $c;