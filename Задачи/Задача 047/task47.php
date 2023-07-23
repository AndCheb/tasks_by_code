<?php

$x = 92;

$x_parts = array_reverse(str_split(strval($x)));

$result = +($x_parts[0] . $x_parts[1]);