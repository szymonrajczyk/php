<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3></h3>
    <form method="get">
        <input type="text" name="surname">
        <input type="submit" name="Zatwierdź">
    </form>
    <?php
        if(!empty($_GET['surname'])) {
            $surname = $_GET['surname'];
        }
        if (strlen(trim($surname))) {
            echo <<<TEXT
            Nazwisko: $surname;
TEXT;
        } else {
            echo "Nie wprowadzaj tylko białych znaków";
        }
    ?>
</body>
</html>