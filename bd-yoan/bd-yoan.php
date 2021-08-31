<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" name="texto">

    <table>
    <tr>
        <td></td>
        <td>Lunes</td>
        <td>Martes</td>
        <td>Miércoles</td>
        <td>Jueves</td>
        <td>Viernes</td>
    </tr>
    <tr>
        <td>10:30</td>
        <td>Matemáticas</td>
        <td>Geografía</td>
        <td>Física</td>
        <td>Dibujo</td>
        <td>Matemáticas</td>
    </tr>
    <tr>
        <td>11:30</td>
        <td>Inglés</td>
        <td>Lenguaje</td>
        <td>Geografía</td>
        <td>Química</td>
        <td>Física</td>
    </tr>
</table>
</body>

</html> -->


<?php
//conectar a bd               host    ,usuario,pass,name bd
$conexion = mysqli_connect("localhost", "root", "", "bd_yoantest");
//test conection
if (mysqli_connect_errno()) {
    echo "fallamos al conectarnos " . mysqli_connect_error();
} else {
    echo "bien conectado";
}
