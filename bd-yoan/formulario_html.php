<?php
$conexion = mysqli_connect("localhost", "root", "", "bd_yoantest");
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
    <form action="formulario_html.php" method="POST">
        <p>Nombre: <input type="text" name="nombre" size="40"></p>
        <p>Apellido: <input type="text" name="apellido" ></p>
        <p>Edad: <input type="number" name="edad" min="40"></p>
        <p>Rut: <input type="text" name="rut" ></p>
        <p>Telefono: <input type="text" name="telefono" ></p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>





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


<script>




</script>
