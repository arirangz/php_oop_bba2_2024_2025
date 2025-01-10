<?php
class Vehicle
{
    public string $brand;
    public float $maxSpeed;
    private string $fuelType;

    public function displayMaxSpeed(): void
    {
        echo $this->maxSpeed;
    }
    // This method is available only in Vehicle, not from Car or outside
    private function displayBrand(): void
    {
        echo $this->brand;
    }
}
