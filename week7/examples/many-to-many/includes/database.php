<?php

// General settings
$host       = "localhost";
$database   = "music_collection_full_relations";
$user       = "root";
$password   = "";

$db = mysqli_connect($host, $user, $password, $database)
    or die("Error: " . mysqli_connect_error());
