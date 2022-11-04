<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    //Declaramos la constante NUMERO, a la cual podremos cambiarle el valor facilmente.
    define("NUMERO", 169);
    //Definimos el array divisores
    echo "<h3>Los numeros divisibles por " . NUMERO . " son: </h3>";
    /*Con un bucle for desde el 2 hasta el numero introducido (sin incluirlo), vamos dividiendo cada numero por la posicion
    en la que nos encontramos, y si el resultado es 0, imprimimos el numero por pantalla. */
    for($i = 2; $i < NUMERO; $i++){ //no he incluido el 1 ya que el 1 no es un numero primo 
        if(NUMERO % $i === 0){
            echo $i . "  ";
            $divisores++; // incrementamos el contador de divisores en 1
        } 
    }
    if($divisores == 0){
        echo "El numero " . NUMERO . " solo tiene por divisores 1 y el mismo, por lo tanto es un numero primo.";
    }
    ?>
</body>
</html>