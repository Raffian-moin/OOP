<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Car\Model as CarModel;
use App\Bike\Model as BikeModel;
use App\Bike\AnotherModel;
use App\Another\Another;

$car = new CarModel();

echo PHP_EOL;

$bike = new BikeModel();

echo PHP_EOL;

$bike = new Another();

echo PHP_EOL;

$bike = new AnotherModel();

// The files are included via composer, we didn't used
// include() or require().
