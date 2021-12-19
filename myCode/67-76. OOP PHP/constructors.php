<?php

// if function is defined outside a class, this is usual function. Method MUST be defined only inside a class!

class Car
{
    // properties
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    // Constructor - It is executed automatically when we initiate a class. Sometimes we need to call first functions, before we start execude methods logic. So,  We don't need call methods with objects.
    function __construct()
    {
        echo "Your Radio is turned ON <br>";
    }

    // Methods
    function numberUngine()
    {
        echo "Your car has " . $this->engine . " engine" . "<br>";
    }
}

$BMW = new Car(); // Your Radio is turned ON
$Truck = new Car(); // Your Radio is turned ON
