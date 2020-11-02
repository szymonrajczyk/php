<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane uzytkownika</title>
</head>
<body>
    <h4>Dane uzytkownika</h4>
    <form method="post">
        <input type="text" id="name" name="name" placeholder="Imie"><br><br>
        <input type="text" id="surname" name="surname" placeholder="Nazwisko"><br><br>
        <input type="submit" value="Wyślij dane"><hr>
    </form>
    <?php
        require_once("./2_function.php");
        if(!empty($_POST['name'])&&!empty($_POST['surname'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            echo show($name, $surname);
        } 
    ?>
</body>
</html>
