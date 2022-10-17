<?php

//setcookie("primeracookie" , "aceptado", strtotime("+1 week"));

$miarray = ["hola",25,[1,3,5]];
$infoguardar = serialize($miarray);

setcookie("primeracookie","aceptado", time()+300);
setcookie("segundacookie",$infoguardar, time()+600);
echo "<h1>Mi primera cookie</h1>";
echo "Valor de la cookie uno : " . $_COOKIE["primeracookie"];
echo "<pre>";
var_dump(unserialize($infoguardar));
echo "<br> Numero de cookies creadas " . count($_COOKIE);
