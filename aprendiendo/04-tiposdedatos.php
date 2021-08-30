<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //tipos de datos
    // enteros (int / integer) = 099
    //coma flotante (float / double) = 3,45
    //cadenas (string )= "hola soy un string"
    //boleano (bool) = true/false
    //null
    //array (coleccion de datos ejm: numero,dato,nombre)
    //objetos 


    $numero = 23;  // una variable no puede tener caracteres latinos ni tildes ni simbolos en general
    $decimal = 23.5;
    $texto = "hola soy un texto $numero";//este estring con comillas dobles puede ser usado para mandar variables dentro de las comillas
    $texto2 = 'hola soy un texto2 <br>'.$numero;// para concatenar una variable numero,es necesario unir un string y un int con un PUNTO
    $verdadero = false;
    $variableNull = null;

    echo $texto2;

    //echo gettype($decimal); //esta funcion busca y devuelve el tipo de dato llamado

    // debugear 
    // echo '<br>';
    // $mi_nombre[] = 'yoan ';
    // $mi_nombre[] = 'yoan ';
    // $mi_nombre[] = 'yoan ';

    // var_dump($mi_nombre); // esta funcion devuelve la ubicacion el tipo y la longitud(length) de la variable "min_nombre"






    ?>


</body>

</html>