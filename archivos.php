<?php

//METODO PARA LEER UN ARCHIVO TXT.

//vamos a leer un archivo txt usando php y algunas funciones que noos provee para hacerlo.
$ruta = "archivo.txt";

//pasamos como primer parametro la ruta del archivo quie queremos abrir y segundo un metodo "r" que significa read.
$contenido = fopen($ruta,"r");

//pasamos como primer parametro el archivo para leer y como segundo parametro la longuitud de ese archivo.
$lectura = fread($contenido,filesize($ruta));

echo $lectura;

//METODO PARA CREAR UN ARCHIVO EN FORMATO TXT.

$file_name = "archivo2.txt";

//agregamos el contenido que tendra el archivo txt
$file_content = "vamos a seguir agregando nuevos metodos y contenido en este archivo para poder seguir aprendiendo mas sobre funciones";

echo "<br>";

if (file_exists($file_name)) {
    echo "el archivo que desea crear ya existe en la ruta elegida";
}else{
    //usamos el metodo para abrir al archivo donde deberia estar
    $create_content = fopen($file_name,"w");

    //usamos este metdoo para escribir los datos en el archivo a crear.
    fwrite($create_content,$file_content);

    fclose($create_content);//cerramos ese archivo porque sino no vamos a poder leerlo al momento de abrirlo.
    echo "archivo creado con existo!!!";
}
