<?php

class Circle extends Shape
{
    protected float $radius;

    public function __construct(float $radius, string $color)
    {
        parent::__construct($color);
        $this->setRadius($radius);
    }

    /**
     * Get the value of radius
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * Set the value of radius
     */
    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function calculateArea(): float
    {
        return round(pi()*pow($this->radius,2),2);
    }
}