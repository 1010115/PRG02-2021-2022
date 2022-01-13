<?php
require_once "includes/database.php";

$id = $_GET['id'];


$query = "SELECT * FROM albums";

$result = mysqli_query($db, $query)
or die('Error ' . mysqli_error($db) . ' with query ' . $query);

$albums = [];

while ($row = mysqli_fetch_assoc($result)) {
    $albums[] = $row;
}
mysqli_close($db);

$album = $albums[$id]

?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection - Details <?=$album['name']?></title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<section>
    <h1><?= $album['name']?></h1>
    <ul>
        <img src="images/<?=$album['image']?>" alt="<?=$album['name'] ?>"/>
        <li>Artist: <?= $album['artist'] ?></li>
        <li>Genre: <?= $album['genre'] ?></li>
        <li>Year: <?=$album['year'] ?></li>
        <li>Tracks:  <?=$album['tracks'] ?></li>
    </ul>
</section>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>








