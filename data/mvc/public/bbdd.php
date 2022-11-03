<?php
    //mysql:dbname=<nombre_bbdd>;host=<ip | nombre>;
    $dsn = "mysql:dbname=demo;host=db";
    $usuario = "dbuser";
    $clave = "secret";

    try{
        $bd = new PDO($dsn,$usuario,$clave);
        $sql = "select nombreusu,password from credenciales";
        $registros = $bd->query($sql);
        echo "<br>Numero de registros devueltos: " . $registros->rowCount();
        if($registros->rowCount() > 0){
            foreach($registros as $fila){
                echo "<br>Nombre de usuario : " . $fila["nombreusu"];
                echo "<br>Password : " . $fila["password"];
            }
        } else {
            echo "<br>No se ha devuelto ninguna fila";
        }

    }catch(PDOException $e){
        echo "Mensaje de la excepcion : " . $e->getMessage();
    }

    /*
    insertar una nueva fila en credenciales ; usuario2 : error (cifrada)
    actualizar fila en credenciales
    borrar fila en credenciales 
    */
