<?php 

/*  
    - interfaces, clases abstract 
    - objetos 
    - polimorfismo : sobreescritura de métodos 
    - NO se pueden sobrecargar métodos 
    - NO se pueden sobrecargar constructores   
    - Herencia unica -> extends (como en Java)
    - Invocar "algo" del padre: parent:: (super() en java)
        $this-> metodo
        $this -> atributo
        static contador;
            -> acceso a elemento estatico dentro de la clase: self::
            - Pertenece a la clase, no al objeto 
*/
class Modulo extends Asignatura {
    private $codigo = null;

    function __construct($nombre, $numerocreditos, $codigo){
        parent:: __construct($nombre,$numerocreditos);
        $this->codigo = $codigo;
    }

    function getCodigo(){
        return $this->codigo;
    }

    function setCodigo($nuevocod){
        $this->codigo = $nuevocod;
    }

    function __toString(){
        return "<br> <b>Datos del modulo: </b><br>"
        . "<br>Nombre del modulo: " . $this->getNombre()
        . "<br>Numero de creditos: " . $this->getNumCreditos()
        . "<br> Codigo del modulo: " . $this->codigo;
    }

    
}