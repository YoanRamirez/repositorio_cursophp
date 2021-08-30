
<?php
// print todas las tablas en una tabla html

// crea 2 variables continente y pais.

$pais = 'chile';
$continente = 'sur_america';

echo "$pais";
echo "<p>";
echo "$continente";
echo "<p>";

if ($pais == 'chile') {
    echo "el dato pais es un ";
    var_dump($pais);
    echo "<p>";
    echo "el dato continente es un ";
    var_dump($continente);
    echo "<p>vivo en $pais que esta en el continente de $continente</p>";
}else{
    echo' no eri chileno prro';
}

echo"<h1>";

var_dump($pais,$continente);

// sacar numeros pares del 1 al 100

for ($i=1; $i <100 ; $i++) { 
    if ($i % 1) {
        echo"es par";
        echo"$i";
    }else{
        echo"es impar";
        echo"$i";
    }

}
$n = 1;
while ($n <= 100) {
        if ($n % 2 == 0) {
                echo " $n es par <p>";
        }else{
                echo " $n es impar <p>";
        }

        $n++;
}



$natural = 0;
while ($natural <= 40) {

    $numero = $natural * $natural;
    echo "$numero es $natural<br>";


    $natural++;
}

$numero[] = $_GET['num_1'.'num_2'];

var_dump($_GET);

 if(isset($_GET['num_1'])&& isset($_GET['num_2'])){ //comprueba si get contiene algo
    $num_1 = $_GET['num_1'];
    $num_1 = $_GET['num_1'];
}

if(isset($_GET)){

}

$num_1 = $_GET['num_1'];
$num_2 = $_GET['num_2'];


print_r($num_1);
echo "<p>";
print_r($num_2);
echo "<p>";

print_r('el numero 1 es: ' . $num_1 . 'el numero 2 es: ' . $num_2 . 'su multiplo es: <br>' . $num_1 * $num_2);

echo "<p>";

print_r('el numero 1 es: ' . $num_1 . 'el numero 2 es: ' . $num_2 . 'su div es: <br>' . $num_1 % $num_2);
//EJERCICIO 5.PHp
//programa que muestre datos entre 2 numeros que llegen por url


$numeroENTR1 = $_GET['num_1'];
$numeroENTR2 = $_GET['num_2']; //fijarse bien en los datos que <recibes class="!!!!!!!!
var_dump($_GET);


for ($n=$numeroENTR1; $n<=$numeroENTR2; $n++) { 
    // $n=$numeroENTR1-$numeroENTR2;
    echo "n=$n";
}
//EJERCICIO 6
//print todas las tablas en una tabla html

echo   "<table border='1'> <tr>"; //inicio de la tabla
echo "<tr>";
for ($cabezera = 1; $cabezera <= 10; $cabezera++) {
    echo "<td>tabla del $cabezera </td>";
}
echo "</tr>";

echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td>";
    for ($x = 1; $x <= 10; $x++) {
        echo "$i  x $x =" . ($i * $x) . "<br>";
    }
    echo "</td>";
}

echo "</tr>";


echo "</table>";//fin de la tabla
