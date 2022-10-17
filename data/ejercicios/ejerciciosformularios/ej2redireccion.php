
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
<form name="ejercicio2" method="get">
    <p>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombreusu" id="nombreusu">
    </p>
    <p><input type="submit" name="envio" id="envio" value="Enviar" ></p>
</form>
<?php
    if (isset($_GET['envio'])) {

        // Comprobar nombre
        if (!empty($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            echo "<br> El nombre es: " . $nombre;
        } else {
            echo "<br><h3> No has introducido ningun nombre</h3>";
        }
    }
?>
</body>
</html>