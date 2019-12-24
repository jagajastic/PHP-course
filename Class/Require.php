<?php

// include_once "Person.php";
require "Person.php";
require_once "Author.php";

$newAuthor = new Author("Samuel Langhorne", "Clement", 1899);
echo $newAuthor->getCompleteName();