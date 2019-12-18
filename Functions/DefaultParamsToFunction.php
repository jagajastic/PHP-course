<?php

function bookByAuthorYear($tempAuthorName, $Year = 1910) // setting a default params, and it mustbe at the end of the perenthesis

{
    echo $Year;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

// bookByAuthor("William shakespeare");
$authorName = "William Shakespeare";
// $year = 1920;
bookByAuthorYear($authorName);