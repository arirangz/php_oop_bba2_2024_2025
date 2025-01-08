<?php
require_once "Person.php";

$johnDoe = new Person("John", "Doe", 30);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $johnDoe->getFullName() ?></h1>
</body>

</html>