<?php
    $miarray = array(1,"hola", 3.0, false);
    echo "<br> Elemento 2 del array:" . $miarray[2];

    //mostrar
    //foreach, var_dump , print_r;
    foreach($miarray as $elmto){
        echo "<br> El elemento es :" .$elmto;
    }

    echo"<br>";
    print_r($miarray);
    var_dump($miarray);

    echo"<br> longitud del array :" . count ($miarray);

$array2 = [
    3,
    2,
    5,
    9
];
echo"<br>";

foreach($array2 as &$elto){
    $elto = $elto * 2;
}
echo"<br>";

print_r($array2);

unset($array2[2]);

print_r($array2);

$array2[] = 99;
echo "<br>";

print_r($array2);
$array2[2]=13;
print_r($array2);


foreach($array2 as $key => $value){
    echo "<br> Clave: " . $key . " y valor: " . $value;
}

$persona = array(
    "edad" => 23,
    "peso" => 75,
    "casado" => false,
    "dni" => "78531122",
    8 => "nss"
);

foreach($persona as $key => $value){
    echo "<br> Clave : " .$key . " y valor: " . $value;
}

echo"<br>";


print_r($persona);

echo "<br> El dni es: " . $persona["dni"];

$arrm = [
    0 => [1,3],
    1 => [5,7,9]
];

echo "<br> " . $arrm[1][1];

