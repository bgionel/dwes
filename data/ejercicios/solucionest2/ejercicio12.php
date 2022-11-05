<?php
    /*
    Si ya se ha apretado el boton de enviar y se ha introducido un nombre, redirigimos con header
    a la pagina en la que se saluda al usuario.
    */
    if(!empty($_POST['envio'])){
        if(!empty($_POST["nombre"])) {
            header("Location: ejercicio12Validar.php");
        }
    } 
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1> Formulario Credenciales</h1>
    <form name="miformu"  method="post">
        <p>
            <label for="nombre">
            <?php
            /* Si ya se ha apretado el boton de enviar pero no se ha introducido un nombre,
            aparecera un asterisco rojo delante del campo para escribir el nombre
            para, mas abajo, explicar que es un campo obligatorio*/
            if(!empty($_POST['envio'])){
                if(empty($_POST["nombre"])) {
                echo "<span style=\"color:red;\">* </span>";
                }
            }
            ?>  
            Introduce Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar">
        <?php
        /* Aqui se indica con un texto en rojo que el campo es obligatorio*/
        if(!empty($_POST['envio'])){
            if(empty($_POST["nombre"])) {
            echo "<br><br><span style=\"color:red;\">* Campo obligatorio </span>";
            }
        }
        ?>
        
    </form>
</body>
</html>