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

// switch ($count) {
//     case 0:
//         echo "There are no authors" . PHP_EOL;
//         break;
//     case 1:
//         echo "There is 1 author" . PHP_EOL;
//         break;
//     default:
//         echo "There is a total of " . $count . "authors";
// }

switch (5 <=> 7) {
    case 1:
        echo "Greater Than" . PHP_EOL;
        break;
    case 0:
        echo "Equal" . PHP_EOL;
        break;
    case -1:
        echo "Less Than" . PHP_EOL;
        break;
    default:
        echo "There is a total of " . $count . "authors";

}