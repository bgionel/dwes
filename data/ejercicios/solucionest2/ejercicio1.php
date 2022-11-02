<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Datos personales</h2>
    <!-- Tabla con los datos personales. -->
    <table>
        <tr>
            <!-- Print con comillas dobles y simples (imprime el texto en la celda de la tabla) -->
            <td><?php print"Nombre";?></td>
            <td><?php print'Bianca';?></td>
        </tr>
        <tr>
            <!-- Echo con comillas dobles y simples (imprime el texto en la celda de la tabla) -->
            <td><?php echo "Apellido";?></td>
            <td><?php echo 'Ionel';?></td>
        </tr>
        <tr>
            <!-- Creo una variable edad para concatenar con echo-->
            <td>
                <?php
                $edad = 25;
                echo"Edad  " . $edad . ".";?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                $telefono = 622544788;
                echo'Telefono  ' . $telefono . '.';?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                $email = "biancagionel@gmail.com";
                echo"Email  " . $email . ".";?>
            </td>
        </tr>
    </table>
</body>
</html>