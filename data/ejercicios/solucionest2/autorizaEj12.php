<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    <?php
        if(isset($_POST['envio'])){
            // Comprobar el nombre
            if(!empty($_POST['nombre'])){
                $usuario = $_POST['nombre'];
            echo "<h4> ¡Hola, " . $usuario . "! Bienvenido.</h4>";
            }
            else {
            header("Location: ejercicio12.php");
            }
        } 
    ?>
</body>
</html>