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


?>
