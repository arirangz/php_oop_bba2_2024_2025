<?php
class Car
{
    public string $brand;
    public float $maxSpeed;
}

$car1 = new Car();
$car1->brand = "Toyota";
$car1->maxSpeed = 275;


var_dump($car1);
