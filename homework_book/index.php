<?php

require_once "Book.php";
require_once "Manga.php";

$book1 = new Book("1984", 15, 20);
$mangaAOT = new Manga("Attack on Titan", 9, 20, "Seinen");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Homework book</h1>
    <section>
        <article>
            <h2><?php $book1->displayInformation(); ?></h2>
        </article>
        <article>
            <h2><?php $mangaAOT->displayInformation(); ?></h2>
        </article>
    </section>
</body>
</html>
