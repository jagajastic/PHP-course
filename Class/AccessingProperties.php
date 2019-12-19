<?php

class Person
{
    public $firstName = "Samuel Langhorne";
    public $lastName = "Clement";
    public $yearBorn = 1899;
}

$myObject = new Person();

echo $myObject->firstName . "\n"; // accessing the properties
$myObject->firstName = 'S.L.';

echo $myObject->firstName;