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
        <p>Apellido: <input type="text" name="apellido"></p>
        <p>Edad: <input type="number" name="edad"></p>
        <p>Rut: <input type="text" name="rut"></p>
        <p>Telefono: <input type="text" name="telefono"></p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>

    <?php
    if ($_POST) {
        $n = $_POST['nombre'];
        $a = $_POST['apellido'];
        $e = $_POST['edad'];
        $r = $_POST['rut'];
        $t = $_POST['telefono'];

        mysqli_query($conexion, "INSERT INTO usuario(nombre,apellido,edad,rut,telefono)values('$n','$a','$e','$r','$t')");
        echo "LOGRADO";
    }

    ?>
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
        echo "paro ?:(";
        $query = mysqli_query($conexion, "SELECT * FROM usuario");
        while ($usuario =  mysqli_fetch_assoc($query)) {
            echo "<br>";
            echo "paro ?:)";
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