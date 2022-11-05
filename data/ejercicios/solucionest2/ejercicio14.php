<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>Calculadora</h1>
    <h3>Introduce dos operandos y selecciona la operacion que quieras realizar:</h3>
    <form method="post" action="">
        <!-- Un input con el primer operando-->
        <input type="text" name="operando1">
        <!-- Un select con el operador deseado para realizar la operacion-->
        <select name="operador">
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicacion</option>
            <option value="/">Division</option>
        </select>
        <!-- Un input con el segundo operando-->
        <input type="text" name="operando2">
        <input type="submit" name="envio" id="envio" value="Enviar">
        <?php
        
        
        //Si se ha enviado la informacion
        if(!empty($_POST['envio'])){
            if(!empty($_POST['operando1']) && !empty($_POST['operando2'])){
                /*Recuperamos los valores que se han introducido o seleccionado en el formulario HTML 
                y los guardamos en las variables $operando1, $operando2, $operador*/
                $operando1 = $_POST['operando1'];
                $operando2 = $_POST['operando2'];
                $operador = $_POST['operador'];
                /*Comparamos el valor recogido con el de suma, resta, multiplicacion o division 
                y hacemos la operacion correspondiente en cada caso, guardando el resultado
                en la variable $resultado*/
                if($operador === "+"){
                    $resultado = $operando1 + $operando2;
                }else if($operador === "-"){
                    $resultado = $operando1 - $operando2;
                }else if($operador === "*"){
                    $resultado = $operando1 * $operando2;
                }else if($operador === "/"){
                    $resultado = $operando1 / $operando2;
                }
                echo "<br>El resultado es: " . $resultado;
            }else {
                echo "<br> <span style=\"color:red;\">Debes introducir dos operandos.</span>";
            }
        } 
    ?>
    </form>
</body>
</html>