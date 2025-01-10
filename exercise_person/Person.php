<?php

class Person
{
    protected string $firstName;
    protected string $lastName;
    protected int $age;

    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
    }

    public function getFullName(): string
    {
        return $this->firstName . " " . $this->lastName;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge(int $age): self
    {
        if ($age >= 0) {
            $this->age = $age;
        } else {
            throw new InvalidArgumentException("Invalid age");
        }

        return $this;
    }
}
