<?php
    /* La funcion fibonacci tiene como parametro n, e imprime por pantalla la posicion n-esima (el parametro) de 
    la sucesion fibonacci*/
    function fibonacci($n){
        $fibonacci = [0,1]; //creamos un array ordenado que contiene los dos primeros numeros, ya que la sucesion se calcula empezando con estos.
        for($i = 2; $i <= $n; $i++){ // recorremos con un bucle for desde el 2 hasta el numero que introducimos como parametro, incrementando de uno en uno
            $fibonacci[] = $fibonacci[$i - 2] + $fibonacci[$i - 1]; //y hacemos la suma de los dos anteriores a partir de los que ya tenemos.
        }
        echo $fibonacci[$n] . "  "; //imprimimos por pantalla el numero fibonacci de la posicion que hemos introducido
    }
    echo"<h3>Los 10 primeros numeros de la serie fibonacci son:</h3>";
    //para mostrar los 10 primeros numeros, haremos un bucle for que recorra desde el 0 hasta el 10 y vaya mostrando el fibonacci de cada posicion
    for($i = 0; $i <= 10; $i++){
        fibonacci($i);
    }