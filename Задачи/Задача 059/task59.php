<?php

$a = 44;
$b = 9;
$c = 35;

$result = $a < $b && $a < $c ? $a : ($b < $c ? $b : $c);