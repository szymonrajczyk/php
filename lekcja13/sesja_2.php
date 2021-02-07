<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesja 2</title>
</head>
<body>
  <h3>Sesja 2</h3>
  <?php 
    $_SESSION['surname'] = 'Nowak';
    print_r($_SESSION);
    echo '<br>';
    $_SESSION['name'] = 'Andrzej';
    // unset($_SESSION['name']);
    echo $_SESSION['name'],'<br>';
  ?>
  <hr><a href="./sesja_3.php">Sesja 3</a>
</body>
</html>