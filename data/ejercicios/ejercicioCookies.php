<!-- Crear web en la que selecciones entre 3 idiomas: español, ingles y aleman
y  selecciones una marca de coche preferida y muestre el siguiente mensaje

    Bienvenido querido usuario.
    Welcome dear user.
    Willkomen Sehr geehrter Nutzer.
    
y la marca de coche seleccionada.

    Esta informacion se debe guardar en cookies
    Si no se selecciona idioma por defecto ser español
*/-->

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
        if (isset($_POST['envio'])) {
            if (!empty($_POST['idiomas'])) {
                $idioma = $_POST['idiomas'];
                if($idioma == "Espanyol"){
                    echo "<br>Bienvenido querido usuario. ";
                }
                elseif($idioma == "Ingles"){
                    echo "<br>Welcome dear user.";
                }
                else {
                    echo "<br>Willkommen sehr geehrter Nutzer. ";
                }
            } 
            else {
                echo "<br> <h3>No has seleccionado ningún idioma</h3>";
            }
        }

        if(isset($_POST['envio'])){
            if(!empty($_POST['coche'])){
                $coche = $_POST['coche'];
                if($coche == "Volkswagen"){
                    echo "<br>Volkswagen. ";
                }
                elseif($coche == "Renault"){
                    echo "<br>Renault";
                }
                else {
                    echo "<br> Seat";
                }
            }
        }
    ?>
</body>
</html>

<!-- establecer una cookie
setcookie(nombre,valor, timeexpired)

leer el valor
$_COOKIE["nombre"]

borrar 
setcookie(nombre,valor, timeexpired-muchotiempo)

redireccion
header ('Location: miotrapagina.php'); -->