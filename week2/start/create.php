<?php

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Music Collection - Create new album</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body >
        <section>
            <h1>Create new album</h1>
            <form action="" method="post">
                <label for="album">Album</label>
                <input type="text"  id="album" name="album">

                <label for="artist">Artist</label>
                <input type="text" id="artist" name="artist">

                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre">

                <label for="year">Year</label>
                <input type="text" id="year" name="year">

                <label for="tracks">Tracks</label>
                <input type="text" id="tracks" name="tracks">

                <label for="submit"></label>
                <input type="submit" id="submit" name="submit" value="submit">

            </form>
        </section>
        <div>
            <a href="index.php">Go back to the list</a>
        </div>
	</body>
</html>
