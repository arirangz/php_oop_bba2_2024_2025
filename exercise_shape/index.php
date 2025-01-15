<?php
require_once "Shape.php";
require_once "Rectangle.php";
require_once "Circle.php";

$rectangle1 = new Rectangle(10, 20, "red");
$circle1 = new Circle(20, "blue");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Shapes</h1>
    <h2>Rectangle</h2>
    <p>Width: <?= $rectangle1->getWidth(); ?>m</p>
    <p>Length: <?= $rectangle1->getLength(); ?>m</p>
    <p>Color: <?= $rectangle1->getColor(); ?></p>
    <p>Area: <?= $rectangle1->calculateArea(); ?>m²</p>

    <h2>Circle</h2>
    <p>Radius: <?=$circle1->getRadius()?></p>
    <p>Color: <?=$circle1->getColor()?></p>
    <p>Area: <?=$circle1->calculateArea()?>m²</p>

    <h2>Count: <?=Shape::getCount(); ?></h2>
</body>

</html>