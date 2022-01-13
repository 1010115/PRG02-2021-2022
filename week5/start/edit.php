<?php
/** @var mysqli $db */
//Require music data to use variable in this file
require_once "includes/database.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];
    $tracks = $_POST['tracks'];
    $id = $_POST['id'];

    $query = "UPDATE albums SET name = '$name', artist = '$artist', genre = '$genre', year = '$year', tracks = '$tracks'  WHERE id = '$id'";
    $result = mysqli_query($db, $query) or die('Error: ' . mysqli_error($db) . ' with query ' . $query);
    print_r($result);
} elseif (isset($_GET['id'])) {

// get the id
    $id = $_GET['id'];

// get the album from the database
    $query = "SELECT * FROM albums WHERE id = $id";
    $result = mysqli_query($db, $query)
    or die ('Error: ' . $query);

// return to homepage if there are no or multiple query results
    if (mysqli_num_rows($result) != 1) {
        header('Location: index.php');
        exit;
    }

// Made database row into an array
    $album = mysqli_fetch_assoc($result);

// store array items in variables
    $artist = $album['artist'];
    $name = $album['name'];
    $genre = $album['genre'];
    $year = $album['year'];
    $tracks = $album['tracks'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Edit</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Edit</h1>

<form action="" method="post">
    <div class="data-field">
        <label for="artist">Artist</label>
        <input id="artist" type="text" name="artist" value="<?= $artist ?>"/>
    </div>
    <div class="data-field">
        <label for="album">Album</label>
        <input id="album" type="text" name="album" value="<?= $name ?>"/>
    </div>
    <div class="data-field">
        <label for="genre">Genre</label>
        <input id="genre" type="text" name="genre" value="<?= $genre ?>"/>
    </div>
    <div class="data-field">
        <label for="year">Year</label>
        <input id="year" type="text" name="year" value="<?= $year ?>"/>
    </div>
    <div class="data-field">
        <label for="tracks">Tracks</label>
        <input id="tracks" type="number" name="tracks" value="<?= $tracks ?>"/>
    </div>
    <div class="data-submit">
        <input type="hidden" name="id" value="<?= $id ?>"/>
        <input type="submit" name="submit" value="Save"/>
    </div>
</form>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
