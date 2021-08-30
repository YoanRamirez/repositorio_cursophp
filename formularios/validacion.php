<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>formulario</h1>
    <form action="procesarformulario.php" method="POST">
        <p>Nombre: <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"/></p>

        <p>apellidos: <input type="text" name="apellidos"  required="required" pattern="[A-Za-z]+"/></p>

        <p>Edad: <input type="text" name="edad"  required="required" pattern="[0-9]+" /></p>

        <p>Correo: <input type="email" name="correo" size="40"  required="required"/></p>

        <p>contrasena: <input type="password" name="contrasena" required="required"/></p>

        <p>
            <input type="submit" value="enviar" />
        </p>
    </form>
</body>

</html>

