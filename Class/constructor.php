<?php

class Person
{
    const AVG_LIFE_SPAN = 79;
    public $firstName;
    public $lastName;
    public $yearBorn;

    public function __construct()
    {
        $this->firstName = "Samuel Langhorne";
        $this->lastName = "Clement";
        $this->yearBorn = 1899;
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

$myObject = new Person();

echo $myObject->firstName;