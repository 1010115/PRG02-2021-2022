<?php

$album = '';
$artist = '';
$genre = '';
$year = '';
$tracks = '';
$errors = [];


if (isset($_POST['submit'])) {
    $complete = true ;
    if (!isset($_POST['album']) || $_POST['album'] === '') {
        $complete = false;
        $errors[] = "veld 1 mag niet leeg zijn";
    } else {
        $album = $_POST['album'];
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
    if ($complete) {
        printf('Album :%s
    Artist :%s
    Genre :%s
    Year :%s
    Tracks : %s',
            $album, $artist, $genre, $year, $tracks);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Collection - Create new album</title>
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
        <label for="album">1. Album</label>
        <input type="text" id="album" name="album">

        <label for="artist">2. Artist</label>
        <input type="text" id="artist" name="artist">

        <label for="genre">3. Genre</label>
        <input type="text" id="genre" name="genre">

        <label for="year">4. Year</label>
        <input type="text" id="year" name="year">

        <label for="tracks">5. Tracks</label>
        <input type="number" id="tracks" name="tracks">

        <label for="submit"></label>
        <input type="submit" id="submit" name="submit" value="submit">

    </form>
</section>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>
