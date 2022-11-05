<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Equipo de basket:</h1> 
    <?php 
    //creo un array y lo voy llenando de uno en uno.
    $equipo[0] = 'Lebron James';
    $equipo[1] = 'Ricky Rubio';
    $equipo[2] = 'Pau Gasol';
    $equipo[3] = 'Marc Gasol';
    $equipo[4] = 'Stephen Curry';
    ?>
    <ul>
    <?php
    //muestro con un foreach los jugadores en elementos li
    foreach($equipo as $jugador){
        echo "<li> $jugador </li>";
    }
    ?> 
    </ul> 
</body>
</html>