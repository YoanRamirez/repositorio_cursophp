<?php

echo 'llegue<br>';
$error = 'true';

if (
    isset($_POST['edad']) 
    && isset($_POST['nombre'])
    && isset($_POST['apellidos'])
    && isset($_POST['correo'])
    && isset($_POST['contrasena'])
){
    echo 'OK<br>';
    $error = 'false';
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $apellido = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
}else{
    echo 'error de validacion';
}


print_r('-> '.$error);

if (!$error) {
    echo 'error de validacion';
}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1 align="center">Info del form</h1>
    <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>Nombre</td>
        <td>Edad</td>
        <td>Apellido</td>
        <td>Correo</td>
        <td>Contraseña</td>
    </tr>
        <tr>
            <td><?php echo $nombre?></td>
            <td><?php echo $edad?></td>
            <td><?php echo $apellido?></td>
            <td><?php echo $correo?></td>
            <td><?php echo $contrasena?></td>
        </tr> 
    </table>

</body>
</html>

<script>

</script>