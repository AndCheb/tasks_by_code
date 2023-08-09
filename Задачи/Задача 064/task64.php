<?php

$a = 32;
$b = 11;

$result = 'false';

if (($a % 2 === 0) && ($b % 2 !== 0)) $result = 'true';
if (($a % 2 !== 0) && ($b % 2 === 0)) $result = 'true';