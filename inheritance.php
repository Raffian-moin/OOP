<?php

declare(strict_types=1);

class Car
{
    public $model;

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    final public function commonCharacteristics() : array 
    {
        return [
            'wheels' => 4
        ];
    }
}

class BMW extends Car
{
    public $tankVolume = 30;

    // not possible to print class property directly
    // echo $tankVolume;

    // not possible to initialize function call in class property
    // $tankVolume = $this->getModel();


    // child class can have it's own methods
    public function sayHello(): string
    {
        return "Hi I'm $this->model";
    }

    // overriding the getModel of parent class. one of the benefit of using
    // return type in function/method is that return type should be same as parent class method
    // getModel of parent class returns string. So overridden getModel in child class should also
    // return string. otherwise php will throw error.
    public function getModel(): string
    {
        return "this is $this->model";
    }

    // we can't override method of parent class defined with final keyword here in child
    // class. it will throw error.
}

$bmw = new BMW();
$bmw->setModel('bmw');

echo $bmw->sayHello();
echo PHP_EOL;

echo $bmw->getModel();
echo PHP_EOL;

print_r($bmw->commonCharacteristics());

/*

NOTE:
-----
we can't print class property directly inside the class or initialize function call in class property. 
for that we have to do that inside class method.

 */
