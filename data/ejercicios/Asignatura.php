<?php

/*
    CONCEPTOS :
    - Sobreescritura (metodos)
        -> mismo nombre con mismo numero de parametros, diferente comportamiento
            -> Clase figura -> metodo calcular_area
            -> Clase circulo -> metodo calcular_area
            -> Clase cuadrado -> metodo calcular_area
    - Sobrecarga (metodos)
        -> mismo nombre con diferente numero de parametros
    - Sobrecarga (constructores)
        - diferentes constructores con el mismo nombre con dif parametros.
    - Polimorfismo: objeto que se comporta como otro.
        - casting
        - sobreescritura
        - sobrecarga
        - ligadura dinamica

    PHP:
        - Si sobrescritura
        - No existe sobrecarga
        - No hay sobrecarga de constructores
        - Si hay polimorfismo (sobreescritura)
        - public, private, protected. Por defecto es public. 

    Notacion: 
        - Nombre clases: UpperCamelCase (PascalCase)
        - Nombre metodos: lowerCamelCase
        Java: this.atributo
        PHP: $this->atributo

*/

class Asignatura {
    private $nombre = null; 
    private $numcreditos = null;
    private static $ciclo = null;

    public function __construct($nombre,$numcreditos){
        $this->nombre = $nombre;
        $this->numcreditos = $numcreditos;
    }

    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    static function getCiclo(){
        return self::$ciclo;
    }
    static function setCiclo($nomciclo){
       self::$ciclo = $nomciclo;
    }

    function getNumCreditos(){
        return $this->numcreditos;
    }
    function setNumCreditos($numcreditos){
        $this->numcreditos = $numcreditos;
    }

    function __toString(){
        return "Datos de la asignatura: <br>"
        . "<br> Nombre asignatura: " . $this->nombre
        . "<br> Numero creditos: " . $this->numcreditos;

    }
}

?>