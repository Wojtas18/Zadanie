<?php
include('RaceCar.php');

$engine = new Engine(140);

$myRaceCar = new RaceCar($engine);


echo "Prędkość maksymalna samochodu: " . $myRaceCar->getVMax() . " km/h<br>";
echo "Przyspieszenie wynosi: " . $myRaceCar->getAcceleration() . " sekund do 100km/h";
