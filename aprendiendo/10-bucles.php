<?php
//while es una estructura de control que permite ejecutar una accion ++i
/*while(condicion){
    bloques de condiciones
    si no se ejecuta la accion termina
}
*/
//EJEMPLO

$n = 0;
while ($n <= 10) {
    echo "<p>$n</p>";
    $n++;
}
echo "<p>";

/*
DO while
la condicion se ejecuta al finnal del  de las instrucciones
*/

//EJEMPLO
$edad = 19;
$contador = 1;
do {
    echo "<p>entraste $contador</p>";
    $contador++;
} while ($edad >= 18 && $contador <= 10);

/*
FOR
es una forma mas simple de hacer un bucle
*/


//EJEMPLO

// $resultado=0

// for($i=0;$i<=10;$i++) { 
//     $resultado += $i;
//     echo "$resultado";
// }

for ($contador = 1; $contador <= 10; $contador++) {
    if ($contador == 45) {
        echo "$contador";
        break;
    }
}
