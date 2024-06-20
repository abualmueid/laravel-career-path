<?php 

// require 'classes/Bike.php';
// require 'classes/Bus.php';
// require 'classes/Car.php';

require 'vendor/autoload.php';

use App\Classes\Bike;
use App\Classes\Bus;
use App\Classes\Car;

$bike = new Bike();
$bus = new Bus();
$car = new Car();

$file = new File();
$file->sayHello();