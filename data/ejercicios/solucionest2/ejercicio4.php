<?php
    function fibonacci($num){
        $fibonacci = [0,1];
        for($i = 2; $i <= $num; $i++){
            $fibonacci[] = $fibonacci[$i - 2] + $fibonacci[$i - 1];
        }
        echo $fibonacci[$num] . "  ";
    }
    echo"<h3>Los 10 primeros numeros de la serie fibonacci son:</h3>";
    for($i = 0; $i <= 10; $i++){
        fibonacci($i);
    }