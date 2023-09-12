<?php

class Cake
{
    private $flavour = 'vanilla';

    public function setFlavour($name)
    {
        $this->flavour = "this is $name cake";
    }

    public function getFlavour()
    {
        return $this->flavour;
    }
}

$cake = new Cake();

// Private property is not accessible from outside of the class.
// NOTE:: this will throw error
// echo $cake->flavour;

// accessing private property value using getter method
echo $cake->getFlavour();

echo PHP_EOL;

// modifying private property value using setter method
$cake->setFlavour('chocolate');

echo $cake->getFlavour();

/*

Private:
-------
Private access modifier means that if an attribute is private then it is not accessible 
from outside of the class. but we can access private property via public method of that class 
which is called getter method. and we can modify private property via public method of that class
which is called setter method.

*/
