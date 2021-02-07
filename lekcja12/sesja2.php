<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesja 2</title>
</head>
<body>
<?php
        session_start();
    
        $mysz = $_POST['mouse']*$_SESSION['cena_mysz'];
        $klawiatura = $_POST['keyboard']*$_SESSION['cena_klawiatura'];
        $mysz = trim($mysz);
        $klawiatura = trim($klawiatura);
        $suma = $mysz+$klawiatura;

        echo '<br><b>Cena myszy: </b>'.$mysz.'zł<br><b>Cena klawiatury: </b>'.$klawiatura.'zł<br><b>Do zapłaty: </b>'.$suma.'zł';
    
    ?>
</body>
</html>