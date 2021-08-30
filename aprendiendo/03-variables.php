<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero = 2;
    $pares = 'soy un numero par <br>';
    $impar = 'soy un numero impar <br>';



    for ($i = 0; $i < 10; $i++) {

        echo 'el valor es: ' . $i . '<br>';

        if ($i > 5) {
            // echo '<br>';
            echo 'soy mayor que 5 <br>';
        } else {
            echo 'soy menor que 5 <br>';
        }

        if ($i % 2 == 0) {
            
            echo $pares;
        } else {
            echo $impar;

        //     $i = true;

        //     if ($i == true) {
        //         echo 'el valor de i es verdadero <br>';
        //     } else {
        //         echo 'el valor de i es falso <br>';
        //     }
        //     // $i = true;
         }
    }

    echo '<br> salida del for';
    ?>



</body>

</html>


<!-- <script>

    // Definicion de % (Módulo)

    // 5 % 3 = 2

    // % = Sobra de la division

    // regla 1 = %=0 ES PAR.     %!=0

</script> -->