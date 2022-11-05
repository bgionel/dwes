<?php
    if(!empty($_POST['envio'])){
        if(!empty($_POST["nombre"])) {
            header("Location: validarEj12.php");
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
    <!--action="autorizaEj12.php"-->
    <h1> Formulario Credenciales</h1>
    <form name="miformu"  method="post">
        <p>
            <label for="nombre">Introduce Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar">
        <?php
        if(!empty($_POST['envio'])){
            if(empty($_POST["nombre"])) {
            echo "<span style=\"color:red;\">* Debes introducir tu nombre </span>";
            }
        }
        ?>
        
    </form>
</body>
</html>