<?php
//es un fichero que se almacena en ordenador user y servidor para recordar datos o rastrear alguna info

//crear cookie
setcookie("micookie","valor de cookie");

//cookie con expiracion
setcookie("unyear","valor de mi cookie de 365",time()+(60*60*24*365));

header('location:ver_cookies.php');// entrega la ubicacion de la cookie y la muestra

?>
<a href="ver_cookies.php" >ver las galletas</a>

