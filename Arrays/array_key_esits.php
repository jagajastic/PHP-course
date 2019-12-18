  <?php

$author = array("Charley Dickens", "Jane Austin", "William Shakespeare");

$asso = [
    'name' => 'Joe',
    'surname' => 'Ibrahim',
];

// echo $author;
// echo $author[2];

// echo $asso['surname'];

echo array_key_exists('name', $asso); // return one if the key is present else nothing

?>