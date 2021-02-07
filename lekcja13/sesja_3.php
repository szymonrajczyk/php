<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesja 3</title>
</head>
<body>
  <h3>Sesja 3</h3>
  <?php 
    session_start();
    session_destroy();
    echo $_SESSION['name'];
  ?>
  <hr><a href="./sesja_1.php">Strona domowa</a>
</body>
</html>