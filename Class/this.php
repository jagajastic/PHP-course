<?php

class Person
{
    const AVG_LIFE_SPAN = 79;
    public $firstName = "Samuel Langhorne";
    public $lastName = "Clement";
    public $yearBorn = 1899;

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