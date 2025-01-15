<?php

class Manga extends Book
{
    protected string $mangaType;

    public function __construct(string $title, float $price, float $vat, string $mangaType)
    {
        parent::__construct($title, $price, $vat);
        $this->setMangaType($mangaType);
    }


    /**
     * Get the value of mangaType
     */
    public function getMangaType(): string
    {
        return $this->mangaType;
    }

    /**
     * Set the value of mangaType
     */
    public function setMangaType(string $mangaType): self
    {
        $this->mangaType = $mangaType;

        return $this;
    }

    public function displayInformation():void
    {
        echo "Title: {$this->getTitle()} - Manga Type: {$this->getMangaType()} - Price Tax Incl.: {$this->getPriceWithVat()} €";
    }
}