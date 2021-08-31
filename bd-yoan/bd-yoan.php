<?php
//conectar a bd               host    ,usuario,pass,name bd
$conexion = mysqli_connect("localhost", "root", "", "bd_yoantest");
//test conection
if (mysqli_connect_errno()) {
    echo "fallamos al conectar nos " . mysqli_connect_error();
} else {
    echo "bien conectado <br>  ";
}

//consulta para ver los caracteres mal ingresados

mysqli_query($conexion, "SET NAMES 'UTF8'"); //SI TIENE EÑE O NO

//CONSULTA select desde php

$query = mysqli_query($conexion, "SELECT * FROM usuario");

//recorrer la tabla de la bd
while ($usuario =  mysqli_fetch_assoc($query)) {
    echo "<br>";
    // var_dump($usuario);
    echo $usuario['nombre'] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center">Info del form</h1>
    <table width="70%" border="1px" align="center">
        <tr align="center">
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Rut</td>
            <td>Telefono</td>
        </tr>
        <?php
     
        $query = mysqli_query($conexion, "SELECT * FROM usuario");
        while ($usuario =  mysqli_fetch_assoc($query)) {
            echo "<br>";          
        ?>
            <tr>
                <td><?php echo  $usuario['nombre']  ?></td>
                <td><?= $usuario['apellido'] ?></td>
                <td><?= $usuario['edad']  ?></td>
                <td><?= $usuario['rut'] ?></td>
                <td><?= $usuario['telefono']  ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>