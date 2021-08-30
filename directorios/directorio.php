<?php
// crear directorio

if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta',0777)or die("no se puede crear la carpeta");
echo " carpeta creada";
}else{
    echo "ya  existe la carpeta";
}


//mkdir('mi_carpeta')

echo "<br>";
if($gestor =opendir('./mi_carpeta')){
    while(false !==($archivo =readdir($gestor)))
    
    if($archivo != '.' && $archivo != '..')
    echo $archivo."<br>";

}
