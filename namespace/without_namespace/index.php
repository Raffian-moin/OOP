<?php

require_once 'Car/Model.php';
require_once 'Bike/Model.php';

$car = new \Car\Model();

echo PHP_EOL;

$bike = new \Bike\Model();

/*
running of this script will throw error as we have included two
Model classes. and if we want to create object with fully qualified
path name from any of them PHP doesn't know which Model to call.
thus throws error.
*/
