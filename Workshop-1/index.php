<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop 1</title>
    <link rel="shortcut icon" href="./img/Favicon.png" type="image/x-icon">
</head>

<body>
    <?php
        date_default_timezone_set("America/Costa_Rica");
        echo "Today is " . date("l") . " " . date("F") . " " . date("Y");
        echo "</br>Hour is " . date("H") . ":" . date("i") . ":" . date("s");
    ?>
</body>

</html>