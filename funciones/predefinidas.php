<?php

//debugear
echo "<br>";
$i = 23;
var_dump($i);
//fecha
echo "<br>";
echo date('d-M-y');
//fecha en formato iunic
echo "<br>";
echo time();
//matematicas
echo "<br>";
echo "raiz cuardada de 10:" . sqrt(10);
//numeros aleatorios
echo "<br>";
echo "n aleatorio  entre 10 y 40:" . rand(10, 40);
//numero pi
echo "<br>";
echo "numero pi:" . pi();
//redondeo
echo "<br>";
echo "redondeo:" . round(12.2523552);
// Mas funciones generales
echo "<br>";
$nombre = 'yoan';
echo gettype($nombre);
echo "<br>";
//detectar tipado
if (is_string($nombre)) {
    echo "es una variable string";
} else {
    echo "NO es una variable string";
}

echo "<br>";
if (is_float($nombre)) {
    echo " es con decimales";
} else {
    echo " NO es con decimales";
}
// si existe la variable
echo "<br>";
if (isset($edad)) { //$nombre
    echo "La variable existe";
} else {
    echo " La variable No existe";
}
// RECORDAR..!! VARIABLE TRIM
echo "<br>";
$frase = trim("     Mi contenido              ");
var_dump($frase);
echo "<br>";

//eliminar variables

$year = 2020;
unset($year);
var_dump($year);
echo "<br>";
//comprobar variable vacia
$texto = "";
if (empty(trim($texto))) { // ojo aca..!!!
    echo "variable contiene no tiene texto";
} else {
    echo "variable contiene texto";
}
echo "<br>";

//contar caracteres

$cadena = "123456";

echo strlen($cadena);

echo "<br>";

//encontrar una palabra o caracter

$frase ="la vida es bella";

echo strpos($frase, "vida");// existe y no existe algo y algo

//reemplazar palabra string
echo "<br>";
$frase = str_replace("vida","moto",$frase);// segun la pocicion en donde este $frase es la forma en como se imprime
echo $frase;
echo "<br>";
//combertir a mayus desde minusculas
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);















