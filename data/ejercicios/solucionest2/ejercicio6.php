<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Equipo de basket:</h1> 
    <?php
    //creo el array equipo con array()
    $equipo = array('Lebron James', 'Ricky Rubio', 'Pau Gasol', 'Marc Gasol', 'Stephen Curry');
    //creo el array equipoBasket con []
    $equipoBasket = ['Lebron James', 'Ricky Rubio', 'Pau Gasol', 'Marc Gasol', 'Stephen Curry']; 
    ?>
    <ul>
    <?php 
    //recorro con foreach el array equipo y voy imprimiendo los jugadores en elementos li
    foreach($equipo as $jugador){
        echo "<li> $jugador </li>";
    }
    ?>
    </ul>
    <?php 
    //recorro con for el array equipoBasket y voy imprimiendo los jugadores en elementos li junto con su posicion
    for($i = 0 ; $i < count($equipoBasket); $i++){
        echo "<li> Jugador " . $i . ": " . $equipoBasket[$i] . " </li>";
    }
    ?>
    </ul>
</body>
</html>