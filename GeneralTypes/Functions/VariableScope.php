<?php

$authorName = "William Shakespeare"; // this will print why, because is the global var

function setAuthorName()
{
    $authorName = "Charles Dickens";
}

setAuthorName();

echo $authorName;