<?php

$month = 11;

switch($month) {
  case 12: case 1: case 2: 'Winter'; break;
  case 3: case 4: case 5: echo 'Spring'; break;
  case 6: case 7: case 8: echo 'Summer'; break;
  case 9: case 10: case 11: echo 'Autumn'; break;
  default: echo 'There is no such month';
}