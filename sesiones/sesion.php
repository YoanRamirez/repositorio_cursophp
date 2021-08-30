<?php

//la sesion es una forma de hacer para que el usuario no se este relogeando siempre osea se mantenga durante el tiempo

//inicio de sesion
session_start();
$variable_normal = "soy una cadena de texto";

//variable de sesion 
$_SESSION['variablepersistente'] = 'hola soy sesion activa';

echo $variable_normal;
echo $_SESSION['variablepersistente'];

