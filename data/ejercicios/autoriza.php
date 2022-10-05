<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulario Credenciales </h1>
    <h2>Si has llegado aqui eres un heroe</h2>
    <?php
    if(isset($_GET['envio'])){

        // Comprobar nombre de usuario
        if(!empty($_GET['nombreusu'])){
            $usuario = $_GET['nombreusu'];
        echo "<br> El nombre de usuario introducido es: " . $usuario;
        } else {
            echo "<br><h3> No has introducido ningun usuario</h3>";
        }
    }
    if(isset($_GET['envio'])){
        //Comprobar contraseña
        if(!empty($_GET['passwd'])){ ;
        echo "<br> La contraseña es: " . $_GET['passwd'];
        } else {
            echo "<br><h3> No has introducido ninguna contraseña</h3>";
        }
    }
    if(isset($_GET['envio'])){
        //Recogida de valores checkbox
        if(!empty($_GET['asignaturas'])){
            $asignaturas = $_GET['asignaturas'];
            foreach($asignaturas as $asignatura){ //foreach elemento del array como valor individual ($asignatura)
                echo "<br> Te encanta el modulo: " . $asignatura;
            }
        } else {
            echo "<br><h3> No has marcado ninguna opcion</h3>";
        }
    }

    if(isset($_GET['envio'])){
            $equipobasket = $_GET["equipo"];
            if(!empty($equipobasket)){
                echo "<br> Tu equipo de basket preferido es: " . $equipobasket;
            } else {
                    echo "<br> No has elegido ningun equipo";
            }
    }

    if(isset($_GET['envio'])){
            $menupreferido= $_GET["menus"];
            // Comprobar menus
            if(!empty($_GET['menus'])){
                $menupreferido = $_GET['menus'];
                echo "<br> Tu plato preferido es: " . $menupreferido;
            } else {
                echo "<br><h3> No has introducido ningun plato</h3>";
            }
    }

    if(isset($_GET['envio'])){
            $menupreferidos= $_GET["menusm"];
            // Comprobar menus array
            if(!empty($menupreferidos)){
                foreach($menupreferidos as $menu){
                    echo "<br> Tu plato preferido es: " . $menu;
                }      
            } else {
                echo "<br><h3> No has introducido ningun plato</h3>";
            }
    }

    ?>
</body>
</html>