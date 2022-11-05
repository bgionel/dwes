<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Nombres de países:</h1>
    <?php
    // creo un array y lo inicializo con los nombres de los paises
    $paises[0]= 'España';
    $paises[1]= 'Italia';
    $paises[2]= 'Canada';
    $paises[4]= 'Dinamarca';
    // imprimo cada elemento del array
    foreach($paises as $pais){
        echo $pais . " ";
    }
    ?>
</body>
</html>