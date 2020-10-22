<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
//require_once 'MotoWay.php';


/*var_dump(Car::ALLOWED_ENERGIES);

$bike = new Bicycle('blue', 1);
$cars = new Car ('blue',5,'diesel');
$truck = new Truck(100, 25, 'yellow', 3, "fuel");
echo $bike->forward();
var_dump($bike);
var_dump($cars);
echo $truck->isFull();
var_dump($truck);


echo $bike->forward();
echo $bike->getCurrentSpeed();
echo $bike->brake();
echo $bike->getCurrentSpeed();*/


echo "<br>";
echo "<br>";
$motorWay = new Motorway ([], 4, 130);
echo "<br>";
$pedestrianWay = new PedestrianWay ([], 1, 10);
echo "<br>";
$residentialWay = new ResidentialWay ([], 2, 50);
var_dump($motorWay);
var_dump($pedestrianWay);
var_dump($residentialWay);

//echo $cars->brake();
//echo $cars->getCurrentSpeed(); 
