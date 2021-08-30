<?php

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";//LLAMA  A LA FUNCION IMPRIMIR COOKIE
}else{
    echo "no existe la cookie";
}