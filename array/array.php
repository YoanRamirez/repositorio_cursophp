<?php
//es una coleccion de datos o variables una caja

$pelicula = "batman";
$pelicula = array('batman', 'dc', 'marvel', 'protosman');
$cantantes = ['2pac', '1pac', '3pac'];
var_dump($pelicula[2]);
echo "</br>";

//mostrar datosd en array

// $peliculas['pelicula'] = 'batman';
// echo "</br>";
// var_dump($peliculas);
// echo "<br>";
// echo $peliculas[0];
// echo "<br>";
// echo $peliculas[2];


//para poder recorrer un array
echo "<h1>Listado de pelicula</h1>";

for ($i = 0; $i < count($pelicula); $i++) {
    echo "<li>" . $pelicula[$i] . "</li>";
}
echo "</lu>";

//recorrer con FOREACH
echo "<h1>Listado de cantante</h1>";

foreach ($cantantes as $cantante) { // al momento de recorrer cantanteS se creara una variable cantante
    echo "<li>" . $cantante . "</li>";
}
echo "</lu>";
//array multidifencional

$contactos = array(
    array(
        'nombre' => 'luis trr',
        'emal' => 'luis trr'
    ),
    array(
        'jose antonio' => 'luis trr',
        'emal' => 'luis trr'
    ),
      array(
        'jose antonio' => 'luis trr',
        'email' => 'luis trr'
    )
);

var_dump($contactos);
echo $contactos[2]['email'];
