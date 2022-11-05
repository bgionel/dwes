<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <title>Document</title>
</head>
<body>
  <?php
  require('views/header.php');
  ?>
   <ul>
    <li><a href="/ejercicio17/App?method=Fibonacci">Muestra la serie Fibonacci</a></li>
    <li><a href="/ejemplos/18?method=login">Login</a></li>
  </ul>
  <h1>Home de <?= $this->name ?></h1>
  <br>
  Muestra la serie <?= $this->fibonacci  ?>
  <br>
  Calcula las <?= $this->potencias2 ?> 
  <br>
  Calcula <?= $this->factoriales ?>
  <br>
  Calcula <?=$this->primos ?>
</body>
</html>