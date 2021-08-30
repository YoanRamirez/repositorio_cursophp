<?php

$cantante = ['cantante 1 ','cantante 2'];

asort($cantante);// ordenamiento de array

sort($cantante);


//añadir a un array

$cantante []='cantante 3';
array_push($cantante,"cantante 4");// inserta


//elimina
array_pop($cantante);
unset($cantante[2]);// elimina en pocicion 2

//aleatorio
echo array_rand($cantante); //se puede crear una variable  para asignar el valor aleatorio del array

//dar la vuelta 
array_reverse($cantante);// siempre es sano guardar el array en una variable

//buscar array

array_search('cantante 1',$cantante);

//contar numero de elementos

count($cantante);

var_dump($cantante);//siempre me mostrara que contiene el elemento array etc










