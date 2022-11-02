<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["envio"])){
            session_start();
            $item = $_POST["lista"];
            $_SESSION["listadeseo"][] = $item;
            $sesioncodif = json_encode($_SESSION); 
            var_dump($sesioncodif);
            //OPCION 1: decodificarlo como un array
            $sesiondecodif = json_decode($sesioncodif,true); //la opción más fácil que hay que usar. 
            echo "<br><br>";
            //$S_SESSION["listadeseo"][4]="Porsche";

            //OPCION 2.1: decodificarlos como un objeto
            $sesiondecodif = json_decode($sesioncodif);
            $sesiondecodif->{'listadeseo'}[6] = "lampara";
            var_dump($sesiondecodif);

            //OPCION 2.2
            $miarray = get_object_vars($sesiondecodif);
            print_r($miarray);
            for($i=0 ; $i < count($miarray, COUNT_RECURSIVE) - 1; $i++){
                echo "<br>Elemento $i es: " . $miarray['listadeseo'][$i];
            }
        }//if_post
    }//if_server

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de deseos</h1>
    <h3>Hoy me apetece comprar...</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <select name="lista" id="lista" required>
            <option value="camisa">camisa</option>
            <option value="cortacesped">cortacesped</option>
            <option value="consola">XBOX 360</option>
            <option value="pantalon">Levis</option>
            <option value="movil">Samsung</option>
            <option value="coche">Mercedes</option>
            <option value="portatil">Acer</option>
            <option value="raspberry">RPI 4</option>
        </select>
        <input type="submit" name="envio" value="Agregar Deseo">
    </form>
</body>
</html>

<!--Lista de deseos
    deseos.php => desplegable : vaqueros 
                                telefono movil
                                coche
                                collar
                                cd
se van mostrando en la misma pagina lo elegido.
    -> sesiones , codificarlo con json.
        -> recuperar la informacion del json codificado.
-->