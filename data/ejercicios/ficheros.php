<?php 
    $nombrefich = "modulodwes.txt";

    $fp = fopen($nombrefich, "r"); //true si no hay problemas.
    if(!$fp){
        echo "<br> No he podido leer el fichero";
    } else {
        //leer el fichero.
            //caracter a caracter
           /* while(!feof($fp)){
                $caracter = fgetc($fp);
                if($caracter == "\n"){ //El caracter \n en html no significa nada
                    echo "<br>"; //asi que lo cambiamos por el salto de linea <br>
                }
                echo $caracter;
            }   */
            /* while(!feof($fp)){
                $linea = fgets($fp);
                echo $linea;
            } */

            $contenido = fread($fp, filesize($nombrefich));
            print_r($contenido);

    }

    echo "<br> Cerrando el fichero...";
    fclose($fp);

    $fp = fopen($nombrefich, "a"); //true si no hay problemas.
    if(!$fp){
        echo "<br> No he podido abrir el fichero.";
    } else {
        $textoainsertar = "Esta es otra linea." . PHP_EOL;
        fwrite($fp,$textoainsertar);
    }
    fclose($fp);