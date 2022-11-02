<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    define("DIVISOR", 3);
    echo "<h3>Los numeros divisibles por " . DIVISOR . " son: </h3>";
    for($i = 1; $i <= 10; $i++){
        if($i % DIVISOR === 0){
            echo $i . "  ";
        }
    }
    ?>
</body>
</html>