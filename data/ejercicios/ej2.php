<?php

    $var1 = 5;
    $var2 = "5";
    // $var2 = (int)"7";
    $var3 = (string)8;
    $var4="";
    $var5;
    // comentario linea
    /*
        varias lineas
    */

    echo "Var1 es del tipo: ". gettype($var1);

    echo "<br>La variable 3 esta definida: ? ". isset($var3); 
    echo "<br>La variable 4 esta vacia: ? ". empty($var4);
    const MICONST = 100;
    echo "<br> la constante es ".MICONST;
    define('OTRA',200);
    echo "<br> la constante es ".OTRA;
    /*
        variables: [A-Z,a-z,0-9]
            - no pueden comenzar por números, ni caracteres especiales
            - si que pueden tener guión bajo (pero no se empieza por ellas)
        
        Case sensitive:
            JAVA -> SI 
            PHP -> a medias: 
                - las variables -> si
                    $VAR diferente de $var
                - los metodos -> no
                    METODO1 = metodo1
    ---------------------
    TIPOS DE DATOS
        int, string, boolean, float
        arrays, objetos, ficheros

        Tipado de lenguaje de programacion: 
            - Fuerte: JAVA
            - Debil: PHP
    
    OPERADORES 
    ----------
    = , <, >, != , <>, ==, ===, <=>

    
    foreach($array as $elemento){

    }
    

    Inclusion de codigo de un fichero en otro: 
    include , include_once, require, require_once;
    */

