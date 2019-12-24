<?php

$authors = [
    "Charles Dickens",
    "Jane Austin",
    "Williams Shakespeare",
    "Mark Twain",
    "Louisa May Alcott",
];

$count = count($authors);

// if ($count == 1) {
//     echo "There is one author" . PHP_EOL;
// } elseif ($count > 1) {
//     echo "There is a total of " . $count . "authors";
// } else {
//     echo "There are no authors";
// }

$outcome = ($count > 0) ? "There is one author" : "There is a total of " . $count . "authors";

echo $outcome;