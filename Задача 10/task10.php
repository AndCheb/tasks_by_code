<?php

$A = 99;
$B = 5;

if ($A >= $B) 
{
	$count = 0;

	for ($i = $B; $i <= $A; $i += $B)
	  $count += $B;
  
	echo 'Длина незанятой части отрезка A = ' . $A - $count; 
}