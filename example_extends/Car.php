<?php

class Car extends Vehicle
{
    public int $wheels;

    public function displayFuel(): void
    {
        // as the fuelType is private, we don't have access in the child
        //echo $this->fuelType;
    }
}
