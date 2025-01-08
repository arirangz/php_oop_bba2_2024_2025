<?php
class Car
{
    private string $brand;
    private float $maxSpeed;

    public function __construct(string $brand, float $maxSpeed)
    {
        $this->setBrand($brand);
        $this->setMaxSpeed($maxSpeed);
    }

    public function setMaxSpeed(float $maxSpeed): self
    {
        if ($maxSpeed >= 0) {
            $this->maxSpeed = $maxSpeed;
        } else {
            $this->maxSpeed = 0;
        }
        return $this;
    }
    public function getMaxSpeed(): float
    {
        return $this->maxSpeed;
    }
    public function getBrand(): string
    {
        return $this->brand;
    }
    public function setBrand(string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }
}


$car1 = new Car("Tokyota", -200);
/*$car1->setBrand("Toyota")
    ->setMaxSpeed(100);*/


echo $car1->getMaxSpeed();
