<?php
    //Si la lista esta definida
    if (isset($_POST['lista'])) {
        //creamos la lista 
        $lista = $_POST['lista'];   
    } else {
        //si la lista no esta definida, creamos una lista vacia
        $lista = [];
    }

    //recogemos aqui los productos nuevos que se van agregando y los añadimos a la lista que hemos creado para guardar 
    //los valores
    if (isset($_POST['nuevo'])) {
        $nuevo = $_POST['nuevo'];
        $lista[] = $nuevo;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 16</title>
</head>
<body>
    <h3>Lista de la compra:</h3>    
    <!-- Solo necesitamos iterar los elementos li que son los que se van imprimiendo, asi que la etiqueta
    <ul></ul> va fuera del php-->
    <ul>
    <?php   
        //Creamos una lista en la que se van a ir guardando los productos que voy añadiendo
        foreach ($lista as $producto) {
            echo "<li>$producto</li>"; //imprimiendo cada elemento li que voy recorriendo de mi lista
        }
    ?>
    </ul>

    <h4>¿Que mas necesitas comprar?</h4>
    <!-- Construimos un formulario-->
        <form name="formu" method="post">
        <?php   
            //imprimimos con foreach la lista de los productos que vamos agregando
            foreach ($lista as $producto) {
                // input de tipo hidden para no "olvidar" los elementos ya añadidos a la lista
                echo '<input type="hidden" name="lista[]" value="' . $producto. '">';
            }
        ?>
        <!--parte del formulario para agregar productos nuevos-->
        <p>
            <label for="nuevo">Introduce un producto: </label>
            <input type="text" name="nuevo" value=""/>
        </p>
        <input type="submit">
        
        </form>        
</body>
</html>