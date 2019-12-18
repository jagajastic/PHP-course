<?php

// function bookByAuthor($authorName)
// {
//     echo $authorName;
// }

// // bookByAuthor("William shakespeare");
// $authorName = "William Shakespeare";

// bookByAuthor($authorName);

function bookByAuthorYear($authorName, $Year)
{
    echo $Year;
    echo "\n";
    echo $authorName;
    echo "\n";
}

// bookByAuthor("William shakespeare");
$authorName = "William Shakespeare";
$year = 1910;
bookByAuthorYear($authorName, $year);