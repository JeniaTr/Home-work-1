<?php
require 'vendor/autoload.php';

use Location\Coordinate;
use Location\Distance\Vincenty;

$coord1 = new Coordinate(49.378518, 32.152849);
$coord2 = new Coordinate(49.426007, 32.094617);

$calculator = new Vincenty();

echo '<h1>   Дом  <-------->  Geekhub  </h1>';
echo '<br>';
echo '<br>';
echo 'Растояние между двумя кординатами :  ', $calculator->getDistance($coord1, $coord2), ' метров';

//=====================================================
echo '<br>';
echo '<br>';
echo '<br>';
echo '<=====================================================================>';
echo '<br>';
echo '<br>';


use Temperature\Factory\DefaultFactory as TemperatureFactory;

$factory = new TemperatureFactory();
$temper = $factory->build(88, 'F');

echo 'Температура в: ', $temper, '  = ', $temper->convert('C')->setPrecision(2);


?>

