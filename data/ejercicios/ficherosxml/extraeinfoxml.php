<?php

    $datos = simplexml_load_file("empleados.xml");
    $apellidos = $datos->xpath("//apellidos");
    foreach($apellidos as $apellido){
        echo "<br> Apellido: " ;
        print_r($apellido);
    }

    $edades = $datos->xpath("//edad");
    foreach($edades as $edad){
        echo "<br> Edad: " . $edad;
    }