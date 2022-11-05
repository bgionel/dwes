<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1> Formulario Credenciales</h1>
    <form name="miformu"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>
            <label for="nombre">
            <?php
            /* Si ya se ha apretado el boton de enviar pero no se ha introducido un nombre o 
            el nombre no tiene un tamaño minimo de 3 caracteres,
            aparecera un asterisco rojo delante del campo para escribir el nombre
            para, mas abajo, explicar que es un campo obligatorio*/
            if(!empty($_POST['envio'])){
                if(empty($_POST["nombre"]) || strlen($_POST["nombre"]) < 3) {
                echo "<span style=\"color:red;\">* </span>";
                }
            }
            ?>  
            Introduce Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $_POST['nombre']?>">
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar">
        <?php
        /* Aqui se indica con un texto en rojo que el campo es obligatorio y la longitud
        minima del texto es de 3 caracteres*/
        if(!empty($_POST['envio'])){
            if(empty($_POST["nombre"]) || strlen($_POST["nombre"]) < 3) {
            echo "<br><br><span style=\"color:red;\">* Campo obligatorio (El nombre debe contener al menos 3 caracteres) </span>";
            }
        }
        /*Si ya se ha apretado el boton de enviar y se ha introducido un nombre con mas de 3 caracteres
        , redirigimos con header a la pagina en la que se saluda al usuario.*/
        if(!empty($_POST['envio'])){
            if(!empty($_POST["nombre"]) && strlen($_POST["nombre"]) >= 3) {
                echo "<h3>¡Hola, $_POST[nombre]! Bienvenido/a</h3>";
            }
        }
        ?>
        
    </form>
</body>
</html>