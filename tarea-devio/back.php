<?php
include 'mostrar.php';

//conectar a bd               host    ,usuario,pass,name bd
$conexion = mysqli_connect("localhost", "root", "", "bd_yoantest");
//test conection
if (mysqli_connect_errno()) {
    echo "fallamos al conectar nos " . mysqli_connect_error();
} else {
    // echo "bien conectado <br>  ";
}
    if ($_POST) {
        $n = $_POST['nombre'];
        $a = $_POST['apellido'];
        $e = $_POST['edad'];
        $r = $_POST['rut'];
        $t = $_POST['telefono'];

        mysqli_query($conexion, "INSERT INTO usuario(nombre,apellido,edad,rut,telefono)values('$n','$a','$e','$r','$t')");
        // echo "LOGRADO";
      
    }
    // $tabla=mysqli_query($conexion, "SELECT * FROM usuario");

    
?>