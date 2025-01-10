<?php
require_once "Vehicle.php";
require_once "Car.php";
require_once "Boat.php";

$toyota = new Car();
$toyota->brand = "test";
$toyota->maxSpeed = 200;
$toyota->displayMaxSpeed();
