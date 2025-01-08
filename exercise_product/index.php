<?php
require_once "Product.php";

$dellLaptopProduct = new Product();
$dellLaptopProduct->name = "Dell Laptop";
$dellLaptopProduct->price = 1000;
$dellLaptopProduct->vat = 20;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Products</h1>
    <article>
        <h2><?= $dellLaptopProduct->name ?></h2>
        <h3>Price: <?= $dellLaptopProduct->price ?> €</h3>
    </article>
</body>

</html>