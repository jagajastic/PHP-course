<?php

class Person
{
    const AVG_LIFE_SPAN = 79;
    public $firstName;
    public $lastName;
    public $yearBorn;

    public function __construct($tempFirst, $tempLast, $tempBorn)
    {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myObject = new Person("Samuel Langhorne", "Clement", 1899);

echo $myObject->getFirstName();