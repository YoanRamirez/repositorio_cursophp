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
    $numero1 = 34;
    $numero2 = 20;

    echo 'Suma =' . ($numero1 + $numero2) . '<br>'; //siempre es bueno poner entre parentecis para que el lenguaje sepa que es una suma o una operacion
    echo 'Resta =' . ($numero1 - $numero2) . '<br>';
    echo 'Multiplicacion =' . ($numero1 * $numero2) . '<br>';
    echo 'Division =' . ($numero1 / $numero2) . '<br>';
    echo 'Resto(modulo) =' . ($numero1 % $numero2) . '<br>';

    //operadores de incremento y decremento
    $year = 2019;

    //operadores de incremento
    $year++;

    //decremento
    $year--;

    //Pre-cremento
    ++$year;

    //Pre-decremento
    --$year;

    echo "<h1>$year<h1>";


    //operadores de asignacion

    $edad = 55;

    echo $edad . '<br>';
    //$edad= $edad + 5:
    echo ($edad += 5).'<br>';
    echo ($edad -= 5).'<br>';
    echo ($edad *= 5).'<br>';
    echo ($edad %= 5).'<br>';



    var_dump($edad); //para saber si se asigno el +=5




    //operadores aritmeticos
    // +$a	Identidad	Conversión de $a a int o float según el caso.
    // -$a	Negación	Opuesto de $a.
    // $a + $b	Adición	Suma de $a y $b.
    // $a - $b	Sustracción	Diferencia de $a y $b.
    // $a * $b	Multiplicación	Producto de $a y $b.
    // $a / $b	División	Cociente de $a y $b.
    // $a % $b	Módulo	Resto de $a dividido por $b.
    // $a ** $b	Exponenciación	Resultado de elevar $a a la potencia $bésima. Introducido en PHP 5.6.

    // echo (5 % 3) . "\n";           // muestra 2
    // echo (5 % -3) . "\n";          // muestra 2
    // echo (-5 % 3) . "\n";          // muestra -2
    // echo (-5 % -3) . "\n";         // muestra -2




    ?>
</body>

</html>