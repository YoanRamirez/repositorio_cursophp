<?php

/*variables globales; se declaran fuera de la funcion


variables locales;solo se usan dentro de una funcion
*/

// $frase = "ni los genios son tan genios y los mediocres tan mediocres <br>";

// echo "$frase";

// function holamundo()
// {
//     global $frase; //esta variable es externa a la funcion
//     $year = 2019;
//     echo "$frase";
//     return $year; //aca puedo hacer que la variable year que es interna de la funcion,funcione fuera de la funcion
// }

// // echo $year;


//funciones variables

function buenasDias()
{
    return "hola buenos dias"; 
}

function BuenasTardes()
{
    return "hola buenas tardes"; 
}
function buenasNoches()
{
    return "hola buenas noches"; 
}

$horario = "Tardes";
$mifuncion = "buenas".$horario;
echo $mifuncion();//recordar llamar con los ()



