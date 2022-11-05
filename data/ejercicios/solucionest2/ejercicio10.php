<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
</head><body>
<?php
//Inicializamos el array
echo "Array ordenado inicializado en la declaración <hr>";
$equipo = array (
    'base' => 'Lebron James', 
    'escolta' => 'Ricky Rubio', 
    'alero' => 'Stephen Curry',
    'alapivot'=> 'Pau Gasol', 
    'pivot' =>'Marc Gasol', 
);


//foreach clave->elemento
echo "Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($equipo as $posicion=>$jugador){
    echo $posicion . ": " . $jugador . '<br>';
}

?>
</body></html>