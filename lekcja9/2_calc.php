<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Kalkulator</h4>
    <form method="post">
        <input type="number" name="x" placeholder="x" step="0.01" autofocus>
        <select name="dzialanie">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="y" placeholder="y" step="0.01">
        <input type="submit" name="button" value="=">
        <input type="number" name="result" id="result" step="0.01" disabled>
    </form>
    <?php
        if (isset($_POST['button'])) {
            if ((!empty($_POST['x']) || $_POST['x'] == '0') && !empty($_POST['y']) || $_POST['y'] == '0') && (!empty($_POST['dzialanie'])) {
                require_once './1_function.php';
                switch($_POST['dzialanie']) {
                    case '+':
                        $result = add($_POST['x'], $_POST['y']);
                        break;
                    case '-':
                        $result = sub($_POST['x'], $_POST['y']);
                        break;
                    case '*':
                        $result = multi($_POST['x'], $_POST['y']);
                        break;
                    case '/':
                        $result = div($_POST['x'], $_POST['y']);
                        break;
                    default:
                        $result = 'Podane działanie jest nieprawidzłowe';
                        break;
                }
                ?>
                <script>
                    document.getElementbyId('result').value = <?php echo $result; ?>
                </script>
                <?php
            } else {
                echo '<br>Wypełnij dane prawidłowo';
            }
        }
    ?>
</body>
</html>