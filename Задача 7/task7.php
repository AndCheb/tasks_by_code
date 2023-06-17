<?php

$a = -1;
$b = 0;
$c = 1;

$pos = 0;
$neg = 0;

if ($a != 0) $a > 0 ? $pos++ : $neg++; 
if ($b != 0) $b > 0 ? $pos++ : $neg++; 
if ($c != 0) $c > 0 ? $pos++ : $neg++; 

echo "Positive: $pos, negative $neg";

// Функция принимающая набор чисел или массив
function pos_and_neg_nums(...$arr)
{
  $pos = 0;
  $neg = 0;
  
  foreach ($arr as $key) {
    if ($key > 0) $pos++;
    if ($key < 0) $neg++;
  }
  
  return "Positive: $pos, negative: $neg";
}

echo pos_and_neg_nums(-1, 0, 1); // Positive: 1, negative: 1
echo pos_and_neg_nums(...[-1, 1, 2]); // Positive: 2, negative: 1