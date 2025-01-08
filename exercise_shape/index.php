<?php
require_once "Rectangle.php";

$rectangle1 = new Rectangle(10, 20, "red");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Rectangle</h1>
    <p>Width: <?= $rectangle1->getWidth(); ?>m</p>
    <p>Length: <?= $rectangle1->getLength(); ?>m</p>
    <p>Color: <?= $rectangle1->getColor(); ?></p>
    <p>Area: <?= $rectangle1->calculateArea(); ?>m²</p>
</body>

</html>