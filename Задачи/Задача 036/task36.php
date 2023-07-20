<?php

$kg = 99.12;

for ($i = 0.1; $i <= 1; $i += 0.1)
  echo number_format($kg * $i, 2) . "\n";