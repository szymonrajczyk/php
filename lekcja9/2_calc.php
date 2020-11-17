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
        if(isset($_POST['button'])){
            if (!empty($_POST['x']) || $_POST['x'] == '0' && !empty($_POST['dzialanie'])){ 
                require_once './1_function.php';
                $x = $_POST['x'];
                $y = $_POST['y'];
                switch($_POST['dzialanie']) {
                    case '+':
                        $result = add($x, $y);
                        break;
                    case '-':
                        $result = sub($x, $y);
                        break;
                    case '*':
                        $result = multi($x, $y);
                        break;
                    case '/':
                        $result = div($x, $y);
                        break;
                    default:
                        $result = 'Podane działanie jest nieprawidzłowe';
                        break;
                }
                ?>
                <script>
                    document.getElementById("result").value = <?php echo $result; ?>;
                </script>
                <?php
            } else {
                echo '<br>Wypełnij dane prawidłowo';
            }
        }
        ?>
</body>
</html>
