<?php

require_once 'conexion.php';

?>
<!--barra lateral-->
<aside id="asidebar">

    <div id="login.php" class="block-aside">
        <h3>LOGIN</h3>
        <form action="login.php" method="$_POST" class="block-aside">
            <p>Email: <input type="email" name="email"></p>
            <p>Contraseña: <input type="password" name="password" minlength="6"></p>
            <input type="submit" name="btentrar" value="Entrar">
        </form>
    </div>




    <div id="registro.php" class="block-aside">
        <h3>REGISTRO</h3>
        <form action="registro.php" method="$_POST">
            <input type="text" name="nombre"  placeholder="Escriba sus dos nombre">
            <input type="text" name="apellidos" size="40" placeholder="Escriba sus dos apellidos">
            <input type="text" name="edad" size="40" placeholder="Escriba su edad">
            <p>Email: <input type="email" name="email"></p>
            <p>Contraseña: <input type="password" name="password" minlength="6"></p>
            <input type="submit" name="btregistrar" value="Registrar">
        </form>
    </div>
</aside>