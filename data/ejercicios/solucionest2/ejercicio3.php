<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    //Declaramos la constante DIVISOR, a la cual podremos cambiarle el valor facilmente.
    define("DIVISOR", 3);
    echo "<h3>Los numeros divisibles por " . DIVISOR . " son: </h3>";
    /*Con un bucle for desde el 1 hasta el 10, vamos dividiendo cada numero por el divisor
    y si el resultado es 0, imprimimos el numero por pantalla. */
    for($i = 1; $i <= 10; $i++){
        if($i % DIVISOR === 0){
            echo $i . "  ";
        }
    }
    ?>
</body>
</html>