<?php
session_start();
$_SESSION['cena_mysz'] = 20;
$_SESSION['cena_klawiatura'] = 40;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sklep</title>
</head>
<body>
    <form method="post" action="./sesja2.php">
        <input type="number" name="mouse" id="mouse" placeholder="Mysz" maxlength="10"><br><br>
        <input type="number" name="keyboard" id="key" placeholder="Klawiatura" maxlength="10"><br><br>
        <input type="submit" value="Prześlij">
    </form>
</body>
</html>
