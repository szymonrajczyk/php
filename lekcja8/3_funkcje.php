<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane uzytkownika</title>
</head>
<body>
    <h4>Dane uzytkownika</h4>
    <form method="get">
        <input type="text" id="name" name="name" placeholder="Imie"><br><br>
        <input type="text" id="surname" name="surname" placeholder="Nazwisko"><br><br>
        <input type="submit" value="Wyślij dane"><hr>
    </form>
    <?php
        require_once("./2_function.php");
        if(!empty($_GET['name'])&&!empty($_GET['surname'])){
            $name = $_GET['name'];
            $surname = $_GET['surname'];
            echo show($name, $surname);
        } 
    ?>
</body>
</html>