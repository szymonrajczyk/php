<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include './lekcje/lekcja3/file.php';
    include_once './lekcje/lekcja3/file.php';

    echo "Require<br>";
    require './lekcje/lekcja3/file.php'; // w przypadku błędu zwraca Fatal Error ale działa

    require_once './lekcje/lekcja3/file.php';

    include './lekcje/lekcja3/string.php';
    ?>
</body>
</html>