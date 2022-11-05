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
    // echo "Estamos en el index<br>";
    include('views/index.php');
  }
  
  public function login()
  {
    // echo "Estamos en login <br>";
    include('views/form.php');
  }  
}
