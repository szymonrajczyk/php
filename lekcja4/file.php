<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $name = "Łukasz";
    $name1 = "  Łukasz ";

    echo strlen($name);
    echo mb_strlen($name);

    echo mb_strlen($name1);
    echo mb_strlen(ltrim($name1));
    echo mb_strlen(rtrim($name1));
    echo mb_strlen(trim($name1));



    // przeszukiwanie ciągów znaków
    $address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
    $search = strstr($address, 'tel tel. (61) 123-45-67');
    echo $search, '<br>'; // 

    $address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
    $search = strstr($address, 'tel', true);
    echo $search, '<br>'; // Poznań ul Polna 7

    $address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
    $search = strstr($address, 'Tel');
    echo $search, '<br>';


    echo strstr('zsk@gmail.com', '@');
    echo strstr('zsk@gmail.com', 64);



    // substr
    $name = "Janusz";
    echo substr($name, 3); //usz
    echo substr($name, 3, 2); // us


    echo substr(strstr('zsk@gmail.com', '@'), 1);



    $replace = str_replace("%imię%", "Janusz", "Masz na imię: %imię%");
    echo "<br>$replace<br>";

    $login = "bączek";
    $censure = array('ą', 'ę');
    $replace = array('a', 'e');


    $correctlogin = str_replace($censure, $replace, $login);
    echo <<<LOGIN
        Login: $login<br>
        Login po zamianie: $correctlogin<br>
LOGIN;




    ?>
</body>
</html>