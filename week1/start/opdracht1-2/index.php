
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programmeren 2 - Week 1 - Opdracht 1.2</title>
</head>
<body>
<h1>Opdracht 1.2</h1>
<hr/>

<h2>Begroeting op basis van het moment van de dag</h2>
<p>
    <?php
    $time = date("H");

    if ($time >= 5  && $time < 12 ){
        echo "goedemorgen";
    } elseif ($time >= 12 && $time < 18) {
        echo "goede middag";
    } elseif ($time >= 18 && $time < 23) {
        echo  "goede avond";
    }

    ?>
</p>
</body>
</html>
