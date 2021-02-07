<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementy</title>
</head>
<body>
    <h4>Elementy</h4>
    <?php
        if(isset($_POST['button']) {
            echo 'Elementy listy<ul>';
            for($i=1;i<count($_POST); $i++) {
                if(!empty($_POST["element$i"])) {
                    echo "<li>".$_POST["element$i"]."</li>";
                }
            }
            echo '</ul>';
        }else if(!empty($_POST['count'])) {
            echo '<h4>Elementy</h4>';
        ?>
            <form method="post">
            <?php
                for($i=1;i<=$_POST['count']); $i++) {
                    echo "<input type=\"text\" name=\"element$i\" placeholder=\"element $i><br><br>";
                }
            ?>
                <input type="submit" value="Pokaż listę">
            </form>
        <?php
        }
        else {
            header('location: ./');
        }
    ?>
</body>
</html>