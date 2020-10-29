<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Formularz - pobrane dane</h4>
    <?php
    function validate($data){
        if(!empty($data['name']) && !empty($data['surname']) && !empty($data['city'])){
            return TRUE;
        }
        return FALSE;
    }

    if (!validate($_GET)){
        ?>
        <script>
        history.back();
        </script>
        <?php

    } else {
        $name = $_GET['name'];
        $surname = $_GET['surname'];
        $color = $_GET['color'];
        $city = $_GET['city'];
        echo <<<L
        Imię: $name<br>
        Nazwisko: $surname<br>
        Kolor: $color<br>
        Miasto: $city<br>
L;
        echo print_r($_GET);
    }
    ?>
</body>
</html>