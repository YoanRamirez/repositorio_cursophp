<?php




$numeroENTR1 = $_GET['num_1'];
$numeroENTR2 = $_GET['num_2']; //fijarse bien en los datos que <recibes class="!!!!!!!!
var_dump($_GET);


for ($n=$numeroENTR1; $n<=$numeroENTR2; $n++) { 
    // $n=$numeroENTR1-$numeroENTR2;
    echo "n=$n";
}