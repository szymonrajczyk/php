<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne</title>
</head>
<body>
    <?php
    echo PHP_VERSION, '<br>';

    echo 'a', 'b'; //wyświetl a i b
    echo 'a'.'b'; //dodaj  a+b wyświetl ab

    $pow = 2 ** 10; // pow(2,10);
    echo "$pow<hr>";

    // operatory bitowe

    // and &
    // or |
    // xor ^
    // not ~
    // <<
    // >>
    $x = 0b1011;
    echo "$x<br>"; // wypisze 11

    $x = $x << 3; //operator przesunięcia w prawo --> 
    echo $x;

    $x = $x >> 2; //10110(2) --> 22(10)


    // porównania

    $x = 1.0;
    $y = 1;

    echo $x <=> $y; // jeżeli wypisze 0 to znaczy że taka sama, 1 to znaczy że większa, -1 że mniejsza (ta po lewej)
    echo "<br>";
    if($x == $y){ // === sprawdza identyczność (również typy)
        echo "Jest równa";
    } else {
        echo "Nie jest równa";
    }

    echo "<br>";

    if($x === $y){ // === sprawdza identyczność (również typy)
        echo "Jest identyczna";
    } else {
        echo "Nie jest identyczna";
    }

    echo gettype($x);
    echo gettype($y);

    // zdj
    //12327

    $x = 1;
    $x = $x++;
    
    // itd tak jak na zdjeciu


    //operatory rzutowania
    // bool int float string array object unset

    $test1 = '1234abc5';
    $test2 = 0;
    $test3 = 5;

    echo "Typ danych $test1: ", gettype($test1);
    echo "<br>$test1<br>";

    $test1 = (int)$test1;

    echo "Typ danych $test1: ", gettype($test1);
    echo "<br>$test1<br>"; //1234


    echo "Typ danych $test2: ", gettype($test2);
    echo "<br>$test2<br>";

    $test2 = (bool)$test2;

    echo "Typ danych $test2: ", gettype($test2);
    echo "<br>$test2<br>";
    
    echo "Typ danych $test3: ", gettype($test3);
    echo "<br>$test3<br>";

    $test3 = (unset)$test3;

    echo "Typ danych $test3: ", gettype($test3);
    echo "<br>$test3<br>";


    ##################################################3


    // rozmiar typu integer

    echo PHP_INT_SIZE, '<hr>';

    // kontrola typu zmiennych

    //is_int(), is_float(), is_numeric()
    //is_string(), is_bool(), is_null()

    $x = 1;
    echo is_int($x); //true
    echo is_float($x); //false
    echo is_numeric($x); // true
    echo is_bool($x); //false


    $y;
    echo is_null($y);

    $y=null;
    echo is_null($y);

    echo "<hr>";

    $w;

    # ERROR //echo $w;

    // operator ignorowania błędów: @
    echo @gettype($w); // błąd ale i tak zwraca NULL

    ?>
</body>
</html>