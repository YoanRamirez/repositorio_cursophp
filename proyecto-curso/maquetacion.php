<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--index-->
    <header id="header">
        <!--logo-->
        <div id="logo">
            <a href="index.php">
                <h1>Blog de videojuegos</h1>
            </a>
        </div>
        <!--menu-->
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">categoria1</a>
                </li>
                <li>
                    <a href="index.php">categoria2</a>
                </li>
                <li>
                    <a href="index.php">categoria3</a>
                </li>
                <li>
                    <a href="index.php">categoria4</a>
                </li>
                <li>
                    <a href="index.php">sobre mi</a>
                </li>
                <li>
                    <a href="index.php">contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <!--barra lateral-->
        <aside id="asidebar">

            <div id="login.php" class="block-aside">
                <h3>LOGIN</h3>
                <form action="login.php" method="$_POST" class="block-aside">
                    <p>Email: <input type="email" name="email"></p>
                    <p>Contraseña: <input type="password" name="password" minlength="6"></p>
                </form>
            </div>

            <div id="registro.php" class="block-aside">
                <h3>REGISTRO</h3>
                <form action="registro.php" method="$_POST">
                    <input type="text" name="nombre" size="40" placeholder="Escriba sus dos nombre">
                    <input type="text" name="apellidos" size="40" placeholder="Escriba sus dos apellidos">
                    <input type="text" name="edad" size="40" placeholder="Escriba su edad">
                    <p>Email: <input type="email" name="email"></p>
                    <p>Contraseña: <input type="password" name="password" minlength="6"></p>
                </form>
            </div>

        </aside>


    </div>




</body>

</html>