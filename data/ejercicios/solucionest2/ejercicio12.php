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
            if(isset($_POST)){
                echo"Variable no definida";
                if(empty($_POST["nombre"])) {
                    echo "Introduce tu nombre";
                }
            }
        if(!empty($_POST['envio'])){
            if(empty($_POST["nombre"])) {
                echo "Int";
            }
        }
       /* if(isset($_POST) && !empty($_POST)){
            echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
            echo "Bienvenido $_POST[nombre]";
            //var_dump nos puede ayudar a entender lo que hemos recibido
            echo "<hr><pre>";
            var_dump($_POST);
        }*/
        
    ?>
    </form>
</body>
</html>