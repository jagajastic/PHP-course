<?php
$authors = [
    "Charles Dickens",
    "Jane Austin",
    "Williams Shakespeare",
    "Mark Twain",
    "Louisa May Alcott",
];
$readingIsFun = true;
$i = 0;
$count = count($authors);

if ($count == 1):
    echo "There is one author" . PHP_EOL;
else:
    echo "There are no authors";
endif;

while ($i < 5):
    echo "Reading is Fun!" . PHP_EOL;
    $i++;
endwhile;

for ($i; $i < 5; $i++):
    echo "Reading is Fun!" . PHP_EOL;
endfor;