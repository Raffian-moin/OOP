<?php

class Cake
{
    public $flavour = 'vanilla';

    public function makeCake() 
    {
        return;
    }
}

$vanilla = new Cake();
// public property accessible from outside of the class
echo $vanilla->flavour;
// public method accessible from outside of the class
echo $vanilla->makeCake();

/*
Access Modifier:
================
Access modifiers determine that if an attribute of the class is accessible or not from
outside of the class. because for all access modifiers attributes of the class are 
accessible from within the class.  

Public:
-------
Public access modifier means that if an attribute is public then it is accessible 
from outside of the class

*/
