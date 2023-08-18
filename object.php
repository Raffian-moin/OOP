<?php

class Cake
{
    public $flour;
    
    public function makeCake($flavour) 
    {
        echo "{$flavour} cake will be ready in 30 minutes";
    }
}

$vanilla = new Cake();
$vanilla->makeCake('Vanilla');

echo "\n";

$apple = new Cake();
$apple->makeCake('Apple');


/*

PHP classes can have objects.
Object is an instance of a class. A class can have as many objects it needs.
objects of a class can have different behaviours.

1. object syntax:

objectName = new className()

2. accessing class method or property via object:

$object->methodName()

$object->propertyName

*/
