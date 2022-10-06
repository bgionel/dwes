<?php

    include_once "Asignatura.php";
    include_once "Modulo.php";
    echo "<h1> WEB DE ASIGNATURAS </h1>";
    $bbdd = new Asignatura("BBDD", 6);
    // echo "<br> Se ha creado la asignatura " . $bbdd->getNombre() 
    //. " con el num de creditos: " . $bbdd->getNumCreditos();
    Asignatura::setCiclo("DAW");
    echo "<br> BBDD pertenece al ciclo " . Asignatura::getCiclo();

    echo "<br> " . $bbdd;
    $dws = new Modulo("DWS" , 6 , 555);
    Modulo::setCiclo("DAW");
    echo "<br> " . $dws;
    echo "<br> DWES pertenece al ciclo " . Modulo::getCiclo();


?>