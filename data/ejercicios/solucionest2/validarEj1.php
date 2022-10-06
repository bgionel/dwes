<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Registro de un nuevo libro</h1>
    <?php
    if (isset($_GET['envio'])) {

        // Comprobar nombre de usuario
        if (!empty($_GET['titulo'])) {
            $titulo = $_GET['titulo'];
            echo "<br> El titulo es: " . $titulo;
        } else {
            echo "<br><h3> No has introducido ningun titulo</h3>";
        }
    }
    ?>

</body>

</html>