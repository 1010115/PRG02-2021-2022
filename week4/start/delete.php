<?php
require_once ("includes/database.php");
$albumId = $_GET['id'];

$query = "DELETE FROM albums WHERE id = " . $albumId;
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) == 0) {
    header('Location: index.php');
    exit;
}
mysqli_close($db);
?>


