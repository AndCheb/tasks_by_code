<?php

// Функция проверяющая истинность высказывание : «Справедливы неравенства A > 2 и B ≤ 3»
function truth_of_statement($a, $b)
{
  return var_dump((bool) ($a > 2 && $b <= 3));
}

?>