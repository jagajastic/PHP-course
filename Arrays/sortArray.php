<?php

$author = ['jones moss', 'wes boss', 'cali os', 'paerl cartar'];

$arr = [
    'name' => 'joe',
    'age' => 12,
    'gender' => 'male',
];

// sort($author);
// print_r($author);

// sort($arr);
// print_r($arr); // sorting associative array remove the key and index it

// asort($author);

// print_r($author); // this randomize the array using asort on index array

// asort($arr);
// print_r($arr); // sort the value base on ascending order

ksort($arr); // note this sort the key but place uppercase first

print_r($arr);