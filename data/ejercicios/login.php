<?php 
        // usuario : 1234 => rol = 0
        // admin : 4567 => rol = 1
        function comprobarCredenciales($nombreusu, $clave){
            if($nombreusu === "usuario" && $clave === "1234"){
                $credenciales["nombreusu"] = "usuario";
                $credenciales["rol"] = 0;
                return $credenciales;
            }

            if($nombreusu === "admin" && $clave === "4567"){
                $credenciales["nombreusu"] = "admin";
                $credenciales["rol"] = 1;
                return $credenciales;
            }
            return false;
        } //funcion

        if($_SERVER["REQUEST_METHOD"] === "POST"){ //Si el metodo con el que recojo los datos es post
            if(isset($_POST["envio"])){  //Si esta establecida la variable envio
                $credentials = comprobarCredenciales($_POST["usuario"],$_POST["password"]); //la funcion devuelve array o falso.
                if($credentials === false){ // si la comprobacion devuelve falso
                    $error = 1; //el codigo de error es 1
                } else {
                    session_start(); //iniciamos la sesion
                    $_SESSION["usuariook"] = $credentials;
                    header("Location: principal.php");
                }
            }
        }
?>
<!--este trozo de codigo de arriba solo se ejecuta cuando le das a submit-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--Crear un entorno de login.
    - La pagina de login: usuario y password (login.php)
        - usuario= usuario
          password= 1234 => ok, rol =0

        - usuario= admin
          password= 4567  => ok, rol =1

        
        - Si login ok => principal.php . Bienvenido usuario

            - Enlace logout.php

        -logout.php => cerrar la sesion y enlace/redireccion a login.php
    
-->
</head>
<body>
    <h2>Pagina de acceso</h2>
    <?php 
        if(isset($error) && $error == 1){
            echo "<p><font color=\"red\">Credenciales invalidas.</font></p>";
        }
    ?>
  <form name="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <p>
            <label for="nombre">Introduce Usuario: </label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p>
            <label for="password">Introduce la contraseña: </label>
            <input type="password" name="password" id="password">
        </p>
        <br>
        <input type="submit" name="envio" id="envio" value="Enviar">
</body>
</html>