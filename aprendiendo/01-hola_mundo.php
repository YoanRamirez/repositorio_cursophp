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

    function imprimir($parametro)
    {
        print_r('El juego 1 : '.$parametro['juego_1'].' El juego 2 es: '.$parametro['juego_2']);
    }

    //$game_1 = 'LOL';
    //$game_2 = 'CS:GO';

    $cajon = [];

    $cajon['juego_1'] = 'LOL';
    $cajon['juego_2'] = 'CS:GO';
    //$cajon[] = 'TFT';
    //$cajon[] = 'TFT';

    //array_push($cajon, "VALORANT","ABC","HOLA","CHAO");

    //$cajon=array_unique($cajon);// solo mantiene los datos unicos
    
    
    // for ($i=0; $i < 10; $i++) { 
    //     if ($i == 5) {
    //         echo 'Hola WETAS '.$i;
    //     }else{
    //         echo 'Hola Mundo '.$i;
    //     }
    //     echo '<br>';
    // }
    
    imprimir($cajon);




    ?>
</body>
</html>

<script>
    console.log("Hola mundo");
    // ECHO NO IMPRIME ARRAY, ECHO IMPRIME VAR SIMPLE
</script>


