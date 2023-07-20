<?php

function kilograms_weight($unit, $mass) {

  switch($unit) {
    case 1: return $mass;
    case 2: return $mass * 1000000;
    case 3: return $mass * 1000;
    case 4: return $mass / 1000;
    case 5: return $mass / 100;
  }

}