

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
        <tr>
            <td><?= $_POST['nombre']  ?></td>
            <td><?= $_POST['apellido'] ?></td>
            <td><?= $_POST['edad']  ?></td>
            <td><?= $_POST['rut'] ?></td>
            <td><?= $_POST['telefono']  ?></td>
        </tr>
    </table>
    <form action="front.html" method="POST">
        <input type="submit" value="volver" />
        <!-- <input type="reset" value="Borrar"> -->
        </p>
    </form>

</body>

</html>