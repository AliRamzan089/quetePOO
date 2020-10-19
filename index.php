<?php

//require_once 'Bicycle.php';
//$bike = new Bicycle('blue');
//var_dump($bike);
//$bike->setCurrentSpeed(20);
//var_dump($bike);

// Moving bike
//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
//$rockrider = new Bicycle('yellow');

//$rockrider->forward();

// Instanciation d'un nouvel objet $tornado
//$tornado = new Bicycle('black');

//$tornado->forward();

//var_dump($bike);
//$bike->dump();

require 'Car.php';
require 'Camion.php';

var_dump(Car::ALLOWED_ENERGIES);
echo $energy->electric();
var_dump(Camion::ALLOWED_STOCKAGE);
echo $camion->full();

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


