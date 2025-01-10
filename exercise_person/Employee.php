<?php

class Employee extends Person
{
    protected string $company;
    protected string $position;

    public function __construct(string $firstName, string $lastName, int $age, string $company, string $position)
    {
        $this->setCompany($company);
        $this->setPosition($position);

        // We are calling the construct of the parent which is person
        parent::__construct($firstName, $lastName, $age);

        /**
         * Otherwise we will need to do all this:
            $this->setFirstName($firstName);
            $this->setLastName($lastName);
            $this->setAge($age);
         */
    }


    /**
     * Get the value of company
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * Set the value of company
     */
    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }
}
