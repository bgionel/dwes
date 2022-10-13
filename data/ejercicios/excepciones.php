<?php   
    include_once "manejadorexcepcion.php";
    //calcular el inverso del numero pasado como parametro
    function inverso($num){
        if($num == 0){
            throw new MiExcepcion("No se puede dividir por cero <br> ");
        }

        return 1/$num;
    }


    try{
        echo "El inverso del numero 5 es : " . inverso(5);
    }catch(Exception $e){
        echo "<br> La razon de la excepcion es : " . $e->getMessage();
    } finally{
        echo "<br> Esto siempre se ejecuta";
    }

    try{
        echo "El inverso del numero 0 es : " . inverso(0);
    }catch(MiExcepcion $e){
        echo "<br> La razon de la excepcion es : " . $e->errorPersonalizado();
    } finally{
        echo "<br> Esto siempre se ejecuta";
    }