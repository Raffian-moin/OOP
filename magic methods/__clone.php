<?php

class Address
{
    public $street = "24 Jump Street";
}

Class User
{
    public $name = "Moin";
    public $address = null;

    public function __construct()
    {
        $this->address = new Address();
    }

    public function __clone()
    {
        $this->address = clone $this->address;
    }
}

$obj1 = new User;
// It will refer to the same address of the $obj1
$obj2 = $obj1;

// So updating a property value will also update the $obj1's same property
$obj2->name = "Raffian";

// Two objects are same although they should be different
var_dump($obj1);
var_dump($obj2);

// clone keyword makes different objects that refers to different addresses
// clone keyword creates a shallow copy of the object
// meaning if first object's property refers to another object (let's say it is third object) then in the cloned object(let's say it is second object)
// the reference of the third object is the same address

$obj3 = clone $obj1;
$obj3->name = "Raffian Moin";

// Here because address refers to the address both in $obj1 and $obj3
// updating address object's property reflects to both $obj1 and $obj3
$obj3->address->street = "12 Street";

var_dump($obj1);
var_dump($obj3);

class User2
{
    public $name = "Moin";
    public $address = null;

    public function __construct()
    {
        $this->address = new Address();
    }

    public function __clone()
    {
        $this->address = clone $this->address;
    }
}

$obj4 = new User2;
$obj5 = clone $obj4;

$obj5->address->street = "Street 100";

// using __clone() magic method will ensure that reference objects are also clone
var_dump($obj4);
var_dump($obj5);