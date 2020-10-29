<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dane</h4>
    <?php
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        echo <<<L
        Imię i nazwisko: $_POST[]
        Płeć:
        Ulubiony kolor:
L;
    ?>

</body>
</html>