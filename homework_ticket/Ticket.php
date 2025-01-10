<?php

class Ticket
{
    private int $quantity;
    private float $unitPrice;

    public function __construct(int $quantity, float $unitPrice)
    {
        $this->setQuantity($quantity);
        $this->setUnitPrice($unitPrice);
    }


    /**
     * Get the value of quantity
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity(int $quantity): self
    {
        if ($quantity > 0) {
            $this->quantity = $quantity;
        } else {
            throw new Exception("Invalid quantity");
        }
        return $this;
    }

    /**
     * Get the value of unitPrice
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * Set the value of unitPrice
     */
    public function setUnitPrice(float $unitPrice): self
    {
        if ($unitPrice > 0) {
            $this->unitPrice = $unitPrice;
        } else {
            throw new Exception("Invalid unit price");
        }

        return $this;
    }

    public function getTotal(): float
    {
        return $this->getQuantity() * $this->getUnitPrice();
    }
}
