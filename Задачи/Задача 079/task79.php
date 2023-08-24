<?php

$c = ord('y');

$result = 
[
  ($c - 1) => chr($c - 1),
  $c => chr($c),
  ($c + 1) => chr($c + 1)
];