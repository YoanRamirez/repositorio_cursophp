<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--Este formulario permite mandar informacion atraves de el method get a un archivo-->
    <!-- <h1>formulario en php</h1>
    <form method="GET" action="recibir.php"> este metodo envia datos a la url para que se muestren, este formulario es para enviar datos
        <p>
            <label>Nombre</label>
            <input type="text" name="nombre" />
        </p>

        <p>
            <label>Apellidos</label>
            <input type="text" name="apellidos" />
        </p>

        <input type="submit" value="Enviar datos" />


    </form>
    
-->
    <h1>formulario en php</h1>
    <form method="POST" action="recibir.php">    <!--es para mandar los datos de los formularios de manera no visible-->
        <p>
            <label>Nombre</label>
            <input type="text" name="nombre" />
        </p>

        <p>
            <label>Apellidos</label>
            <input type="text" name="apellidos" />
        </p>

        <p>
            <label>Numero</label>
            <input type="number" name="num" min=""  max="10" step="1" />
        </p>

        <input type="submit" value="Enviar datos" />


    </form>



</body>

</html>

</script>