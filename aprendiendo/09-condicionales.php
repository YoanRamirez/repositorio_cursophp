<?php
//el if ejecuta instrucciones
//operador 
//== igual
// 1.Arithmetic Operator
// + = Addition
// - = Subtraction
// * = Multiplication
// / = Division
// % = Modulo
// ** = Exponentiation

// 2.Assignment Operator
//      = "equal to

// 3.Array Operator
//     + = Union
//     == = Equality
//     === = Identity
//     != = Inequality
//     <> = Inequality
//     !== =    Non-identity

// 4.Bitwise Operator
// & = and
// ^ = xor
// | = not
// << = shift left
// >> = shift right

// 5.Comparison Operator
// ==  = equal
// === = identical
// !=  = not equal
// !== = not identical
// <>  = not equal
// <  less than
// <= less than or equal
// >  greater than
// >=  greater than or equal
// <=>  spaceship operator

// 6.Execution Operator
// `` = backticks 

// 7.Error Control Operator
//     @ = at sign

// 8.Incrementing/Decrementing Operator
//     ++$a = PreIncrement
//     $a++ = PostIncrement
//     --$a = PreDecrement
//     $a-- = Postdecrement

// 9.Logical Operator
//     && = And
//     || = Or
//     ! = Not ,,,, LO CONTRARIO
//     and = And
//     xor = Xor
//     or = Or

// 10.string Operator
//     . =  concatenation operator
//     .= concatenating assignment operator

// 11.Type Operator
//     instanceof = instanceof

// 12.Ternary or Conditional operator
//    ?: = Ternary operator

// 13.Null Coalescing Operator
//     ??" = null coalescing

// 14.Clone new Operator
//     clone new = clone new

// 15.yield from Operator

//     yield from = yield from

// 16.yield Operator
//     yield = yield

// 17.print Operator
//     print = print


// EJEMPLO 1 CON IF


// $color = 'verde';

// //$color = 'rojo';

// if ($color == 'rojo') {
//     echo 'el color es rojo';
// } else {
//     echo 'el color no es rojo';
// }

// $year=2019;

// if ($year<2019) {
//     echo 'es menor que  2019';
// }else{
//     echo 'NO estamos en el 2019';
// }

// $year=2024;

// if ($year!=2019) {
//     echo 'ees diferente a  2019';
// }else{
//     echo 'estamos 2019';
// }


// EJEMPLO 2
// $ciudad = 'madrid';
// $nombre = 'Yoan';
// $edad = '67';
// $edadMayor = '18';
// $continente = 'asia';

// if ($edad >= $edadMayor) {
//     echo "<h1>$nombre es mayor de edad</h1>"; // las comillas son importantes para llamar variables
//     echo "<h2>Es de $ciudad </H2>";
//     if ($continente == "europa") {           // aqui se anida la condicion
//         echo "<h2> Y es de $ciudad</h2>";
//     } else {
//         echo "No es Europeo";
//     }
// } else {
//     echo "<h1>$nombre No Es Mayor de edad</h1>";
// }


//EJEMPLO 3

// $dia = '5';

// if ($dia == 1) {
//     echo 'es lunes';
// } else {
//     if ($dia == 2) {
//         echo 'es martes';
//     } else {
//         if ($dia == 3) {
//             echo 'es miercoles';
//         } else {
//             if ($dia == 4) {
//                 echo 'es Jueves';
//             } else {
//                 if ($dia == 5) {
//                     echo 'es viernes';
//                 } else {
//                     if ($dia == 6) {
//                         echo 'es sabado';
//                     } else {
//                         if ($dia == 7) {
//                             echo 'es domingo';
//                         }
//                     }
//                 }
//             }
//         }
//     }
// }


// if ($dia==1) {
//     echo'es lunes';
// }elseif($dia==2){
//     echo'es martes';
// }elseif($dia==3){
//     echo 'es miercoles';
// }elseif($dia==4){
//     echo 'es jueves';
// }elseif($dia==5){
//     echo'es viernes';
// }elseif($dia==6){
//     echo'es finde';
// }

//EJEMPLO 4

// $edad = 18;
// $edad2 = 64;
// $edad_oficial = 20;

// if ($edad_oficial >= $edad && $edad_oficial <= $edad2) { //aqui pide un numero intermedio
//     echo 'Esta en edad de Trabajar';
// } else {
//     echo 'No puede Trabajar';
// }

// $pais = 'numeros';

// if ($pais != '5') {
//     echo 'ok';
// }else{
//     echo 'No';
// }

// if (false) {
//     echo 'true';
// }else{
//     echo 'false';
// }


//EJEMPLO 5
//SWITCH

$dia = 6;

switch ($dia) { // en sierto caso se ejecuta algo
    case 1:
        echo 'lunes';
        break;
    case 2:
        echo 'martes';
        break;
    case 3:
        echo 'miercoles';
        break;
    case 4:
        echo 'jueves';
        break;
    case 5:
        echo 'viernes';
        break;
    case 6:
        echo 'findesemana';
        break;
    default :
        echo "Mal ingresado";
}

//EJEMPLO 6
//GOTO es para saltar de una parte del codigo a otra
goto marca;

echo "<h3>instruccion1</h3>";
echo "<h3>instruccion2</h3>";
echo "<h3>instruccion3</h3>";
echo "<h3>instruccion4</h3>";
echo "<h3>instruccion5</h3>";
echo "<h3>instruccion6</h3>";

marca:
echo'me salte 6 echo';


// = -> asignacion
// == -> COMPARACION,       EJ       [DATO] ES IGUAL AL [DATO]        $AAA == 'hola' -> TRUE                  'hola' == 'hola'
// === -> COMPARACION ESTRICTA VERIFICA TANTO EL DATO COMO EL TIPO     $AAA === '5' -> FALSE   

// que es el tipo de una variable? INT


//segunda forma de saltar lineas de codigos

$gg = true;

if ($gg) {
    echo "<h3>instruccion1</h3>";
    echo "<h3>instruccion2</h3>";
    echo "<h3>instruccion3</h3>";
    echo "<h3>instruccion4</h3>";
    echo "<h3>instruccion5</h3>";
    echo "<h3>instruccion6</h3>";
}else{
    echo'me salte 6 echo';
}
















