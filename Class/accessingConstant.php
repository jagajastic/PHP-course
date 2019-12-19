<?php

class Person
{
    const AVG_LIFE_SPAN = 79;
    public $firstName = "Samuel Langhorne";
    public $lastName = "Clement";
    public $yearBorn = 1899;
}

$myObject = new Person();

echo $myObject::AVG_LIFE_SPAN . "\n"; // using object to access it.""
echo Person::AVG_LIFE_SPAN . "\n";