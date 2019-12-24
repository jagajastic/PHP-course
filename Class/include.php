<?php

include_once "Person.php";
include_once "Author.php";

$newAuthor = new Author("Samuel Langhorne", "Clement", 1899);
echo $newAuthor->getCompleteName();