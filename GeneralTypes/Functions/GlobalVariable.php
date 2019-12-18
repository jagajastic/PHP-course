<?php

$authorName = "William Shakespeare"; // this will print why, because is the global var

function setAuthorName()
{
    global $authorName; // this make the variable global
    $authorName = "Charles Dickens";
}

setAuthorName();

echo $authorName;