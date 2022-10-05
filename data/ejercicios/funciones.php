<?php 

//variables globales
$var1 = 6;
$var2 = 7;

    function suma($a,$b){
        global $var1;
        global $var2;
        $var1 = 99;
        $var2 = 100;
        echo "<br> La variable dentro de la funcion var1 y var2 son: " . $var1 . " y " . $var2;
        //definicion variables estatica
        static $varestatica = 0;
        echo "<br>El valor de la var estatica es: " . $varestatica;
        $varestatica++;
        //variables locales
        return $a + $b;
    }

    echo "<br> La suma es: " . suma(3,5);
    echo "<br> La variable FUERA de la funcion var1 y var2 son: " . $var1 . " y " . $var2;
    echo "<br> Llamada a la suma 1 vez:" . suma(3,5);
    echo "<br> Llamada a la suma 2 vez:" . suma(3,5);
    echo "<br> Llamada a la suma 3 vez:" . suma(3,5);

    function restar(&$var3, $op2){
        $var3--;
        echo "<br> var 3 vale " . $var3;
    }

    $var3 = 8;
    $var4 = 3;

    echo "<br> La resta es: " . restar($var3,6);

