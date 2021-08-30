<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //las constantes son como las variables,tipo contenedor de texto,pero la constante nunca varian.osea meter un numero y luego cambiarlo.la constante no cambia

    //esta es una constante
    echo '<h1>esto es una constante<br>';
    define('nombre', 'yoan');
    define('web', 'yoan jose');
    echo '<h1>' . web . '<h1>';
    echo '<br>';


    //esta es una variable
    echo '<h1>esto es una variable<br>';
    $web = "yoan jose Ramirez<br>";
    $web = "maida<br>";
    echo '<h1>' . $web . '<h1>';




    //constantes predefinidas son las que permiten visualizar ciertos datos

    echo __LINE__;// indica la linea que se esta imprimiendo
    echo __CLASS__;//indica la clase que se esta imprimiendo
    function    holamundo()
    {
        echo __FUNCTION__; //indica la funcion que se esta imprimiendo
    }
    holamundo();
    
    ?>
</body>

</html>