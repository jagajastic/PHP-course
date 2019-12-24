<?php

$author = [
    "Charles Dickens",
    "Jane Austin",
    "Williams Shakespeare",
    "Mark Twain",
    "Louisa May Alcott",
];

$count = count($author);

if ($count > 0) {
    echo "There is a total of " . $count . " authors" . PHP_EOL;
} else {
    echo "There are no authors";
}