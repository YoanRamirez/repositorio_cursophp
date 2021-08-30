<?php
echo $_POST['archivo'];
$archivo = $_FILES['archivo'];
var_dump($archivo);
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/jfif" || $tipo == "image/gif") {
    if (is_dir('images')) { // si no es
        mkdir('images', 0777);
    }
    move_uploaded_file($archivo['tmp_name'], 'images/' . $nombre);
    // header("Refresh: 5; URL=subidas.php");
    echo "imagen subida";
} else {
    // header("Refresh: 5; URL=subidas.php");
    echo "SUBE BIEN LA IMAGEN PORFA..!";
}
