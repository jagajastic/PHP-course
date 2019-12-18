<?php

$arr = [
    'name' => 'joe',
    'age' => 12,
    'Gender' => [
        'male',
        'female',
        'other',
    ],
];

// echo count($arr); // this count only the key
// echo count($arr, 1); // count with the nested arraye

echo count($arr, COUNT_RECURSIVE); // check the nested array