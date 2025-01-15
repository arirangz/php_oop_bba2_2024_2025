<?php
require_once "ArrayTools.php";
$marks = [15, 16.5, 20, 2, 14.5, 10];
$temparatures = [10, 20, -2, 32, 15, 5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array tools</h1>
    <section>
        <h2>Mark</h2>
        <h3>Max: <?=ArrayTools::getMax($marks)?></h3>
        <h3>Min: <?=ArrayTools::getMin($marks)?></h3>
    </section>
    <section>
        <h2>Temperature</h2>
        <h3>Max: <?=ArrayTools::getMax($temparatures)?></h3>
        <h3>Min: <?=ArrayTools::getMin($temparatures)?></h3>
    </section>
</body>
</html>

