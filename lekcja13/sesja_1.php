<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strona domowa</title>
</head>
<body>
  <h3>Strona domowa</h3>
  <?php 
    $_SESSION['name'] = "Katarzyna";
    echo $_SESSION['name'];
  ?>
  <hr><a href="./sesja_2.php">Sesja 2</a>
</body>
</html>