<?php

require_once "Person.php";
require_once "Employee.php";

$employee1 = new Employee("John", "Doe", 25, "Google", "Developer");

echo $employee1->getFullName();
