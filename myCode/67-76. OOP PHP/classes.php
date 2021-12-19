<?php

// if function is defined outside a class, this is usual function. Method MUST be defined only inside a class!

class Car
{
    // properties
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    // Methods
    function turnONradio()
    {
        echo "Your Radio is turned ON <br>";
    }
    function numberUngine()
    {
        echo "Your car has " . $this->engine . " engine" . "<br>";
    }
    function changeDoors()
    {
        $this->doors = 2;
        echo "Now, Your car has " . $this->doors . " doors" . "<br>";
    }
}

/* -------------------------------------------------------------------------- */
// class_exists() — Checks if the class has been defined
if (class_exists("Car")) {
    echo "You have made Class" . '<br>';
}

// method_exists() — Checks if the class has certain method
if (method_exists("Car", "turnONradio")) {
    echo "You have Method 'turnONradio' in 'Car' Class <br><br>";
}
/* -------------------------------------------------------------------------- */

// instantiate class / make objects
$BMW = new Car();
$Toyota = new Car();

$BMW->turnONradio();
$Toyota->numberUngine();
echo $BMW->wheels . "<br>";
$Toyota->changeDoors();

$truck = new Car();
echo "But Truck has " . $truck->wheels = 12 . " wheels." . "<br>";
