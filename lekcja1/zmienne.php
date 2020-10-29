<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne</title>
</head>
<body>
    <?php
    $name = 'Janusz';
    $username = 'Nowak';
    echo 'Imię: $name</br>';
    //konkatenacja
    echo "Imię: $name".", Nazwisko: $username</br>";
    echo 'tekst';

    //typy danych
    //bolean
    $prawda =true;
    $fałsz = false;

    //zapisuj nazwy zmiennych w języku angielskim!!
    echo $prawda;
    echo $fałsz; //brak wyśweitlania 0

    //integer
    $bin = 0b1010; //10
    echo $bin;
    $dec = 11;
    echo "<br>$dec<hr>";


    $name = 'Anna';
    // to co jest poniżej to są etykiety (L)
    $tekst = <<< L
    Heredoc
    Imię: $name <br>
    <hr>
    L;

    echo $tekst;

    $city='Poznan';

    echo "Nazwa zmiennej: \$city , wartość: $city";

    ?>
</body>
</html>