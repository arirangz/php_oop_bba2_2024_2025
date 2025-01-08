<?php

class Rectangle
{
    public float $length;
    public float $width;
    public string $color;

    public function __construct(float $length, float $width, string $color)
    {
        $this->setWidth($width);
        $this->setLength($length);
        $this->setColor($color);
    }

    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }

    /**
     * Get the value of length
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Set the value of length
     */
    public function setLength(float $length): self
    {
        if ($length >= 0) {
            $this->length = $length;
        } else {
            $this->length = 0;
        }

        return $this;
    }

    /**
     * Get the value of width
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Set the value of width
     */
    public function setWidth(float $width): self
    {
        if ($width >= 0) {
            $this->width = $width;
        } else {
            $this->width = 0;
        }

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
