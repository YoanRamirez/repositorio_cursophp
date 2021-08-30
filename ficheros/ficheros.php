<?php
// //abrir archivo
// $archivo = fopen("ficheros.txt","a+");

// //leer contenido
// while(!feof($archivo)){ // recorre todas las lineas del archivo.txt
// $contenido = fgets($archivo);
// echo $contenido."<br>";
// }
// //escribir en un archivo
// fwrite($archivo,"soy un texto metido edesde php");


// //cerrar archivo
// fclose($archivo);





//copiar un archivo
copy('ficheros.txt','fichero_copiado.txt')or die("error al copiar");

// //renombrar
// rename('fichero_copiado.txt','archivito.txt');


// //eliminar archivo

// unlink('archivito.txt')or die("error al copiar");

if(file_exists("ficheros.txt")){
echo "el archivo existe";
}else{
    echo "el archivo no existe";  
}


