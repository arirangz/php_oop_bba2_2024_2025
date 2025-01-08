<?php
require_once "Person.php";

try {
    $johnDoe = new Person("John", "Doe", 20);

    $johnDoe->setAge(25);
} catch (\InvalidArgumentException $e) {
    $errorMessage = $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($johnDoe)): ?>
        <h1><?= $johnDoe->getFullName() ?></h1>
        <h2>Age: <?= $johnDoe->getAge() ?></h2>
    <?php else: ?>
        <h1><?= $errorMessage; ?></h1>
    <?php endif; ?>
</body>

</html>