<?php
    echo "<h3>¡Envio completado!</h3>";
    echo "<br><h3>Los valores que has introducido son:</h3>";
     /*Recuperamos los valores que se han introducido o seleccionado en el formulario HTML 
                y los guardamos en las variables $operando1, $operando2, $operador*/
    foreach($_POST['nombres'] as $nombre){
        echo " " . $nombre;
    }