<?php

$a = 2;
$b = 6;

$list_of_numbers = [];

while($b > $a + 1) 
{
	 array_push($list_of_numbers, --$b);
	 echo "$b\n";
}

echo 'amount of numbers: ' . count($list_of_numbers);