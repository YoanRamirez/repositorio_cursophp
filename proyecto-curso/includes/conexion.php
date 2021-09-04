<?php
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'cursophp';
$bd = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($bd, "SET NAMES 'UTF8'");
 