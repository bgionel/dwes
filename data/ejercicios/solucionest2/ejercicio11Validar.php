<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar el ejercicio 11</title>
</head>

<body>
    
    <?php
    if (isset($_POST['envio'])) {

        // Comprobar titulo
        if (!empty($_POST['titulo'])) {
            $titulo = $_POST['titulo'];
            echo "<br> El titulo es: " . $titulo;
        } else {
            echo "<br><h3> No has introducido ningun titulo</h3>";
        }
    }

    if (isset($_POST['envio'])) {

        // Comprobar autor
        if (!empty($_POST['autor'])) {
            $autor = $_POST['autor'];
            echo "<br> El autor es: " . $autor;
        } else {
            echo "<br><h3> No has introducido ningun autor</h3>";
        }
    }

    if (isset($_POST['envio'])) {

        // Comprobar editorial
        if (!empty($_POST['editorial'])) {
            $editorial = $_POST['editorial'];
            echo "<br> El editorial es: " . $editorial;
        } else {
            echo "<br><h3> No has introducido ninguna editorial</h3>";
        }
    }

    if (isset($_POST['envio'])) {

        // Comprobar paginas
        if (!empty($_POST['paginas'])) {
            $paginas = $_POST['paginas'];
            echo "<br> Numero de paginas: " . $paginas;
        } else {
            echo "<br><h3> No has introducido ningun numero paginas</h3>";
        }
    }
    ?>

</body>

</html>