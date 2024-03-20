<?php

Class TestClass
{
    protected $name = "Moin";

    public $age = 27;
}

$obj = new TestClass();

$file = fopen("serialize.txt", "w");

// We can't write object to the file
// because we can only store string in text file
// fwrite($file, $obj);

// So we have to serialize the object and it will convert the
// object to string
fwrite($file, serialize($obj));

fclose($file);

// Serialize function returns the string representation of a value