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
    //variables superglobales


    //variables de servidor
    echo '<h1>';
    echo $_SERVER['SERVER_ADDR'];
    echo '<h1>';

    //variables de dominio del servidor
    echo '<h1>';
    echo $_SERVER['SERVER_NAME'];
    echo '<h1>';

    //variables de VERSIONES DEL SERVIDOR
    echo '<h1>';
    echo $_SERVER['SERVER_SOFTWARE'];
    echo '<h1>';
 
    //variables del clienter
    echo '<h1>';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '<h1>';

    //variables MUESTRA LA IP
    echo '<h1>';
    echo $_SERVER['REMOTE_ADDR'];
    echo '<h1>';





    ?>
</body>

</html>