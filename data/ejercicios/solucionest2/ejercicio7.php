<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Nombres de países:</h1>
    <?php
    // creo un array y lo inicializo con los nombres de los paises
    $paises = ['España', 'Italia', 'Canada', 'Dinamarca'];
    // imprimo cada elemento del array
    foreach($paises as $pais){
        echo $pais . " ";
    }
    ?>
</body>
</html>