<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Formularz - wprowadzanie danych</h4>
    <form action="./5_form_data.php" method="get">
        <input type="text" name="name"><br>
        <input type="text" name="surname"><br>
        <input type="radio" name="color" value="r">Czerwony
        <input type="radio" name="color" value="g">Zielony
        <input type="radio" name="color" value="b">Blue
        <h5>Miasto</h5>
        <input type="text" name="city"><br>
        <input type="submit" value="Wyślioj dane">
        
    </form>
</body>
</html>