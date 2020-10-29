<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Formularz</h4>
    <form action="./2_form_dane.php" method="post">
        <input type="text" name="surname" 
        placeholder="Nazwisko" 
        autofocus autocomplete><br>

        <input type="text" name="name" 
        placeholder="Imię" autofocus autocomplete><br>

        <select default="m" name="plec" required>
            <option value="">Wybierz plec</option>
            <option value="m">Mezczyzna</option>
            <option value="k">kobieta</option>
        </select>
        <br>

        <input type="submit" value="wyślij">

    </form>
</body>
</html>