<?php
require_once "Ticket.php";

$errorMessage = "";
try {
    $ticket1 = new Ticket(2, 10);
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
} catch (TypeError $e) {
    // This error will appear if we put a string instead of quantity or price
    $errorMessage = "Incorrect data type";
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
    <h1>Homework Ticket</h1>
    <h2>Ticket</h2>
    <?php if (isset($ticket1)): ?>
        <p>Unit price: <?= $ticket1->getUnitPrice() ?></p>
        <p>Quantity: <?= $ticket1->getQuantity() ?></p>
        <p>Total to pay: <?= $ticket1->getTotal() ?></p>
    <?php else: ?>
        <h2><?= $errorMessage; ?></h2>
    <?php endif; ?>
</body>

</html>