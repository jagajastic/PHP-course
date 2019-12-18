<?php

$author = array("Charley Dickens", "Jane Austin", "William Shakespeare");
$arr = [
    'name' => 'joe',
    'age' => 12,
    'Gender' => 'male',
];

unset($author[1], $author[0]); //remove many
unset($arr['name']); // remove one
unset($author); // remove all
print_r($author);
print_r($arr);