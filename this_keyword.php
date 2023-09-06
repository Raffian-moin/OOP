<?php

class Cake
{
    public $cakeCookingTime = 30;

    public function makeCake($flavour)
    {
        echo "{$flavour} cake will be ready in $this->cakeCookingTime minutes";
    }
}

$vanilla = new Cake();
$vanilla->makeCake('Vanilla');

echo "\n";

$apple = new Cake();
$apple->makeCake('Apple');


/*

$this keyword:
-------------
$this keyword means that the properties and methods belongs to the class where this is used.

we can only use $this inside the class

syntax:
-------
$this->propertyName;
$this->methodName();

*/
