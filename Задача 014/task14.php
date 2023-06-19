<?php

$A = 10;
$result = $A % 2 !== 0 ? 'true' : 'false'; // результат проверки

// Функция проверки числа на нечётность
function is_odd ($x)
{
  return $x % 2 !== 0  ? 'true' : 'false';
}