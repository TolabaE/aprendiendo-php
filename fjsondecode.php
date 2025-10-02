<?php

//arcodeo un archivo que debe convertir una cadena de texto a un objeto o arreglo.
$documentJson = '[{"nombre":"juan","apellido":"perez"},
    {"nombre":"miguel","apellido":"torrez"}
]';

$result = json_decode($documentJson);

foreach ($result as $persona ) {
    echo "Nombre: ".($persona->nombre)." apellido: ".($persona->apellido)."<br>";
}

//realizamos el camino inverso, convertir un objeto o arreglo a docuemento json para que puedan usar otros lenguajes ej python.

$lista_super = array("tomate"=>2,"peras"=>1,"manzanas"=>4,"banana"=>6);
//lo convierte a formato string.
$jsondocument = json_encode($lista_super);
print_r($jsondocument); //salida => '{"tomate":2,"peras":1,"manzanas":4,"banana":6}'
