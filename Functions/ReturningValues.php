<?php

function bookByAuthorYear($tempAuthorName, $Year = 1910) // setting a default params, and it mustbe at the end of the perenthesis

{
    echo $Year;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

function getAuthor()
{
    return "Charles ickensD";
}

// bookByAuthor("William shakespeare");
$authorName = getAuthor();
$year = 1920;
bookByAuthorYear($authorName, $year);