<?php

if (isset($_POST['btregistrar'])) {
    $n = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $a = isset($_POST['apellido']) ? $_POST['apellido'] : false;
    $e = isset($_POST['edad']) ? $_POST['edad'] : false;
    $r = isset($_POST['email']) ? $_POST['email'] : false;
    $t = isset($_POST['password']) ? $_POST['password'] : false;
    var_dump($_POST);
}

if(!empty($_POST['nombre']) && !is_numeric($n) && !preg_match("/[0-9]/",$n) ){

    echo "ingresado correctamente el nombre";

}
