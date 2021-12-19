<?php

// Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. These can also be accessed statically within an instantiated class object.
// property can be attached only to CLASS, not instanse!
// We can use static properties/methods everywhere
// Inside Classes instead of "$this" keyword we use "self".

class Car
{
    static $wheels = 18;
    var $engine = 1;
    static $doors = 4;

    function showProperty()
    {
        echo self::$doors = 10;
    }
}

$bmw = new Car();
$bmw->showProperty(); // 10

echo Car::$wheels; // 18
