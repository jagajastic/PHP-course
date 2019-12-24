<?php

// $val1 = (6 < 7);
// $val2 = (8 == 8);
$val1 = true;
$val2 = false;

var_dump($val1);
var_dump($val2);

var_dump($val2 and $val2);
var_dump($val2 && $val2);
var_dump($val2 or $val2);
var_dump($val2 || $val2);

var_dump(!$val1);
var_dump(!$val2);