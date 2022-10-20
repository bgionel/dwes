<?php

//setcookie("primeracookie" , "aceptado", strtotime("+1 week"));

$miarray = ['a'=> "hola", 'b'=>25,'c'=>[1,3,5]];
$infoguardar = serialize($miarray);

//$infojson = json_encode($miarray);
$infojson = json_encode($miarray);
echo "<br>Codificacion del array en JSON: " . $infojson;


setcookie("primeracookie","aceptado", time()+300);
setcookie("segundacookie",$infoguardar, time()+600);
echo "<h1>Mi primera cookie</h1>";
echo "Valor de la cookie uno : " . $_COOKIE["primeracookie"];
echo "<pre>";
echo "<br>Valor de cookie 2: ";
//var_dump($infojson);
var_dump(unserialize($_COOKIE["segundacookie"]));
echo "<br> Numero de cookies creadas " . count($_COOKIE);
