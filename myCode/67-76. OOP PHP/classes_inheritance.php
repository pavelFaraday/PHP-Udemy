<?php

class Car
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function turnONradio()
    {
        echo "Your Radio is turned ON <br>";
    }
    function numberUngine()
    {
        echo "Your car has " . $this->engine . " engine" . "<br>";
    }
}


$BMW = new Car();

/* ---------------------------- class inheritance --------------------------- */

// now we have all "Car"-s functionality & logic inside "Plane" Class with "extends" keyword
class Plane extends Car
{
    // change Pharent class properties in child class
    var $wheels = 20;
}

$Jet = new Plane();
echo $Jet->hood . "<br>";
$Jet->turnONradio();
echo $Jet->wheels . "<br>";
