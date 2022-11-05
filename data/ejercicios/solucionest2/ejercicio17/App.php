<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    //definimos los atributos
    $this->name = $name;
    $this->fibonacci= "Fibonacci";
    $this->potencias2 = "Potencias de 2";
    $this->factoriales = "Factoriales";
    $this->primos = "Primos";
  }

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
  
    try {
      $this->$method();      
    } catch (\Throwable $th) {
      if (method_exists($this, $method)) {
        header("HTTP/1.0 500 Internal Server Error");
        return http_response_code(500);
        echo "Error en el servidor";
      } else {
        header("HTTP/1.0 404 Not Found");
        echo "No encontrado";      
      }  
    } finally {
      echo "<pre>";
      print_r($th);
    }
  }

  
  public function index()
  {
    include('views/index.php');
  }
  /* esta funcion tiene como parametro n, que sera el numero  de fibonaccis que quiero generar*/
  public function fibonacci($n)
  {
    $num1 = 0; // los dos primeros numeros son 0 y 1 siempre 
    $num2 = 1; //asi que los asignamos al principio
  
    $contador= 0;
    while ($contador < $n){
        echo " " . $num1;
        $num3 = $num2 + $num1; //el numero fibonacci es la suma de  los dos fibonaccis anteriores
        $num1 = $num2; // hemos avanzado un puesto asi que asignamos el nuevo valor
        $num2 = $num3; //lo mismo para este
        $contador = $contador + 1; //incrementamos el contador
    }
  }
  /* esta funcion calcula las potencias del de desde 2 elevado a 0, hasta 2 elevado a 24 
  como en el enunciado no nos lo piden, no hay parametros ya que solo va a ser hasta 24*/
  public function potencias2()
  {
    for ($i = 0; $i <= 24; $i++){ //recorremos desde el 0 hasta el 24
      echo pow(2,$i) . " "; //usando la funcion pow, elevamos el 2 desde i = 0 hasta i = 24 
    }
  }
  /* esta funcion imprime el factorial desde 1 hasta un numero cercano a 1 millon*/
  public function factorial()
  {
    $res = 1; //el factorial de 1 es 1 asi que empezamos aqui
      for($i = 2; $i < 1000000; $i++){
      $res *= $i;
      echo $res; //vamos imprimiendo los resultados
      }
    
  }
  public function primos()
  {
    
  }  
}
