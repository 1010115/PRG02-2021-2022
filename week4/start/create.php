<?php
require_once "includes/database.php";

$name = '';
$artist = '';
$genre = '';
$year = NULL;
$tracks = NULL;
$image = '';
$errors = [];


if (isset($_POST['submit'])) {
    $complete = true ;
    if (!isset($_POST['name']) || $_POST['name'] === '') {
        $complete = false;
        $errors[] = "veld 1 mag niet leeg zijn";
    } else {
        $name = $_POST['name'];
    }
    if (!isset($_POST['artist']) || $_POST['artist'] === '') {
        $complete = false;
        $errors[] = "veld 2 mag niet leeg zijn";
    } else {
        $artist = $_POST['artist'];
    }
    if (!isset($_POST['genre']) || $_POST['genre'] === '') {
        $complete = false;
        $errors[] = "veld 3 mag niet leeg zijn";
    } else {
        $genre = $_POST['genre'];
    }
    if (!isset($_POST['year']) || $_POST['year'] === '') {
        $complete = false;
        $errors[] = "veld 4 mag niet leeg zijn";
    } else {
        $year = $_POST['year'];
    }
    if (!isset($_POST['tracks']) || $_POST['tracks'] === '') {
        $complete = false;
        $errors[] = "veld 5 mag niet leeg zijn";
    } else {
        $tracks = $_POST['tracks'];
    }

    if (!isset($_POST['image']) || $_POST['image'] === '') {
        $complete = false;
        $errors[] = "veld 6 mag niet leeg zijn";
    } else {
        $image = $_POST['image'];
    }


    if ($complete) {

        $query = "INSERT INTO albums (name, artist, genre, year, tracks,image) VALUES('$name','$artist', '$genre', '$year', '$tracks','$image')";
        $result = mysqli_query($db, $query);

    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Create</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<section>

    <ul>
        <?php foreach ($errors as $error) { ?>
            <li><?= $error ?></li>
        <?php } ?>
    </ul>

</section>

<section>
    <h1>Create new album</h1>
    <form action="" method="post">
        <label for="name">1. Name</label>
        <input type="text" id="name" name="name">

        <label for="artist">2. Artist</label>
        <input type="text" id="artist" name="artist">

        <label for="genre">3. Genre</label>
        <input type="text" id="genre" name="genre">

        <label for="year">4. Year</label>
        <input type="text" id="year" name="year">

        <label for="tracks">5. Tracks</label>
        <input type="number" id="tracks" name="tracks">

        <label for="image">6. Image</label>
        <input type="text" id="image" name="image">

        <label for="submit"></label>
        <input type="submit" id="submit" name="submit" value="submit">

    </form>
</section>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
