<?php
//Require database in this file
require_once "includes/database.php";

    $albumId = $_GET['id'];


    $query = "SELECT * FROM albums WHERE id = " . $albumId;
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 0) {
        header('Location: index.php');
        exit;
    }

    $album = mysqli_fetch_assoc($result);

    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <title>Music Collection Create</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
<body>
<h1><?= $album['artist'] . ' - ' . $album['name']; ?></h1>

<div>
    <img src="images/<?= $album['image']; ?>" alt=""/>
</div>
<ul>
    <li>Genre: <?= $album['genre']; ?></li>
    <li>Year: <?= $album['year']; ?></li>
    <li>Tracks: <?= $album['tracks']; ?></li>
</ul>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
