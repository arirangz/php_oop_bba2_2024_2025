<?php

abstract class Animal
{
    abstract public function makeSound(): void;

    public function eat(): void
    {
        echo "Yummy!";
    }
}
