<?php
$authors = [
    "Charles Dickens",
    "Jane Austin",
    "Williams Shakespeare",
    "Mark Twain",
    "Louisa May Alcott",
];

$count = count($authors);

$outome = $count ?? $someothervar ?? "Count unavailable." . PHP_EOL; // return the var that is set else return the text

echo $outome;