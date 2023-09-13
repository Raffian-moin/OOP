<?php

require_once 'Car/Model.php';
require_once 'Bike/Model.php';

$car = new \Car\Model();

echo PHP_EOL;

$bike = new \Bike\Model();

/**
 * This script will not throw error. we have included two Model classes.
 * we have used namespaces for Model classes. and when we create object
 * of the Model classes PHP knows which model belongs to which directory.
 * another thing, if we omit namespace from one of the Model classes PHP still will 
 * resolve the classes. PHP will recognize namespaced class and consider the other 
 * Model class to be from the file other than namespaced class.
 */