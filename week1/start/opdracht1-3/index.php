<?php
//Multi dimensional array with the music collection data
$musicAlbums =
    [
        ["artist" => "CIX",
            "album" => "HELLO Chapter1:Hello,Stranger",
            "genre" => " K-POP",
            "year" => "2019",
            "tracks" => " 5"],

        ["artist" => "CIX",
            "album" => "HELLO Chapter2:Hello,Strange Place",
            "genre" => " K-POP",
            "year" => "2019",
            "tracks" => " 5"],

        ["artist" => "CIX",
            "album" => "HELLO Chapter2:Hello,Strange Time",
            "genre" => " K-POP",
            "year" => "2020",
            "tracks" => " 5"],

        ["artist" => "CIX",
            "album" => "HELLO ChapterØ.Hello,Strange Dream",
            "genre" => " K-POP",
            "year" => "2021",
            "tracks" => " 5"],

        ["artist" => "CIX",
            "album" => " 'OK'Prologue:Be OK",
            "genre" => "K-POP",
            "year" => "2021",
            "tracks" => "10 "
        ],

        ["artist" => "DPR LIVE",
            "album" => "IITE COOL",
            "genre" => "KRnB",
            "year" => "2021",
            "tracks" => "6"],

        ["artist" => "DPR LIVE",
            "album" => "IS ANYBODY OUT THERE",
            "genre" => "KRnB",
            "year" => "2020",
            "tracks" => "11"],

        ["artist" => "DPR IAN",
            "album" => "Moodswings in This Order",
            "genre" => "KRnB",
            "year" => "2021",
            "tracks" => "8"],

        ["artist" => "DPR LIVE",
            "album" => "Coming To You Live",
            "genre" => "KRnB",
            "year" => "2017",
            "tracks" => "7"],

        ["artist" => "DPR LIVE",
            "album" => "Her",
            "genre" => "KRnB",
            "year" => "2017",
            "tracks" => "5"],

        // fill the collection with albums (also arrays)
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Music Collection</h1>
<hr/>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($musicAlbums as $index => $album) { ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $album["artist"] ?></td>
            <td><?= $album["album"] ?> </td>
            <td><?= $album["genre"] ?></td>
            <td><?= $album["year"] ?></td>
            <td><?= $album["tracks"] ?></td>
        </tr>
    <?php } ?>
    <!--        Loop through all albums in the collection-->
    </tbody>
</table>
</body>
</html>
