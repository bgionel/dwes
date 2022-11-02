<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    //Declaramos la constante NUMERO, a la cual podremos cambiarle el valor facilmente.
    define("NUMERO", 8);
    echo"<h2>Tabla de multiplicar del ". NUMERO ."</h2>";
    /*Con un bucle for que empiece en 0 y termine en 10, vamos imprimiendo el resultado de ese numero
    multiplicado por el correspondiente, incrementando de uno en uno */
    for($i = 0; $i <= 10; $i++){
        $resultado = NUMERO * $i;
        echo $resultado . "  ";
    }
    ?>
</body>
</html>
