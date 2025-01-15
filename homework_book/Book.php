<?php
class Book {
    protected string $title;
    protected float $price;
    protected float $vat;

    public function __construct(string $title, float $price, float $vat)
    {
        
        $this->setPrice($price);
        $this->setTitle($title);
        $this->setVat($vat);
    }
    

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of vat
     */
    public function getVat(): float
    {
        return $this->vat;
    }

    /**
     * Set the value of vat
     */
    public function setVat(float $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    public function getPriceWithVat():float
    {
        return $this->getPrice() + $this->getPrice()*$this->getVat();
    }

    public function displayInformation():void
    {
        echo "Title: {$this->getTitle()} - Price Tax Incl.: {$this->getPriceWithVat()} €";
    }
}