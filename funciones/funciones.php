<?php

//unna funcion es un conjunto de instrucciones que se pueden reutilizar solo invocando a la funcion


/*function nombre (){
 instrucciones
}

nombre($mi parametro):


*/

// function muestraNombre()
// {
//     echo "yoan<br>";
//     echo "jose<br>";
// }

// //para invocar la funcion 

// muestraNombre(); //no hay datos recibidos
// muestraNombre();

//ejemplo 2

/*function tabla($numero)
{
    //var_dump($numero);
    echo "Tabla de multiplicar del numero: $numero <br>";

    for ($i = 1; $i <= 10; $i++) {
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br>";
    }
}


if (isset($_GET['numero'])) { //aca me indica si el parametro _get trae datos desde la url o pagina de envio
    tabla($_GET['numero']); //para que la funciopn reciba un numero por url
    tabla(2);
    tabla(6);
} else {
    echo "no hay numero para sacar la tabla";
}


for ($i = 0; $i <= 10; $i++) {
    tabla($i);
}
*/
//EJEMPLO
// function calculadora($numero1, $numero2)
// {
//     $suma = $numero1 + $numero2;
//     $resta = $numero1 - $numero2;
//     $div = $numero1 / $numero2;
//     $multi = $numero1 * $numero2;
//     echo "suma = $suma<br>";
//     echo "resta = $resta<br>";
//     echo "div = $div<br>";
//     echo "multi = $multi<br>";
//     echo "<hr>";
//     echo "<br>";
// }


// calculadora(43, 45);


//-----------------------------------------------------
// function calculadora2($numero1, $numero2, $negrita = false)
// {
//     //parametors opcionales
//     $cadena_texto = "";
//     if ($negrita != false) {
//         $cadena_texto .= "<h1>";
//     }

//     $suma = $numero1 + $numero2;
//     $resta = $numero1 - $numero2;
//     $div = $numero1 / $numero2;
//     $multi = $numero1 * $numero2;
//     $cadena_texto .= "suma = $suma<br>";
//     $cadena_texto .= "resta = $resta<br>";
//     $cadena_texto .= "div = $div<br>";
//     $cadena_texto .= "multi = $multi<br>";
//     $cadena_texto .= "<hr>";
//     // var_dump($cadena_texto);
//     if($negrita){
//         $cadena_texto.="<h1/>";
//     }


//     return($cadena_texto);// entrega un valor total de la funcion RECUERDA CONCATENAR .= (duda nal nelson)
// }

// echo calculadora2(43, 45, true);
// echo calculadora2(43, 45, true);
// echo calculadora2(43, 45, true);


//ejemplo //SE POUEDE EJECUTAR UNA FUNCION DENTRO DE OTRA
function getNombre($nombre)
{
    $texto = " El nombre es; " . $nombre;
    return $texto;
}
function getApellidos1($apellidos)
{
    return  " los apellidos son: " . $apellidos;
}

function getApellidos2($apellidos)
{
    return  " los apellidos son:" . $apellidos;
}


function devolverNombre($parametros)
{
    $texto = getNombre($parametros['nombre']) . "<br>" . getApellidos1($parametros['apellidos1'] . "<br>" . getApellidos2($parametros['apellidos2']));

    return ($texto);
}
// echo devolverNombre();

$cajon['nombre'] = 'yoan';
$cajon['apellidos1'] = 'Ramirez';
$cajon['apellidos2'] = 'Benavides';

echo getNombre('pepe');
echo devolverNombre($cajon);








//a la funcion devolvernombre * mandar el nombre y apellido en un arreglo por lo tanto la funcion devolver nombre solo tiene que devolver un parametro
//LISTO..!
