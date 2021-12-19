<?php

// public - propertie/method is avalaible in hole our program, everywhere..
// protected - propertie/method is avalaible only in parent class or subclasses/child classes/extended classes
// private - propertie/method is avalaible only only only in parent class!

class Car
{
    // properties
    public $wheels = 4;
    protected $engine = 1;
    private $doors = 4;

    // Methods
    function showProperty()
    {
        echo $this->engine . "<br>";
    }
}

$BMW = new Car();
echo $BMW->wheels . "<br>";  // public - 4
echo $BMW->showProperty();  // protected - 1

class Plane extends Car
{
    function showProperty()
    {
        echo $this->engine . "<br>";
    }
}

$plane = new Plane();
$plane->showProperty(); // protected - 1
