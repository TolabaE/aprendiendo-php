<?php


echo "<br>CICLO FOREACH";//sirve para recorrer arreglos e ir iternado cada uno de los elementos.

$componetes =["procesador ","fuente de poder","placa de video","ram","almacenamiento","Gabinete","placa base","cooler CPU"];

//recorro cada valor del arreglo, siempre lo hace en forma creciente.
foreach ($componetes as $value) {
    echo "<br>".$value;
}

echo "<br>accediendo a un array con claves";

$pc=[
    "procesador"=>"no disponible",
    "mother"=>"no disponible",
    "placa de video"=>"no disponible",
    "memoria ram"=>"2 x 8gb kingston fury 3200mhz",
    "almacenamiento"=>"disco SSD 480gb kingston",
    "fuente"=>"no disponible",
    "gabinete"=>"performance 80-16",
    "cooler CPU"=>"si"
];

echo "<br>";
echo "<br> COMPONENTES QUE ACTUALMENTE TENGO";
foreach ($pc as $key => $value) {
    echo "<br> $key : $value";
}

echo "<br>  accediendo a un arreglo dentro de otro arreglo";

$doble_array = [
    ["placa de videos"=>"gtx 1660", "placa de videos"=>"rtx 2060", "placa de videos"=>"rtx 3060", "placa de videos"=>"rtx 4060"],
    // ["procesador"=>"intel i3 10105","procesador"=>"intel i5 10400F","procesador"=>"intel i5 11400F","procesador"=>"intel i7 10600F"]
];

foreach ($doble_array as $doble) {
    echo "<br>".$doble["placa de videos"]."<br>";
}

echo "<br> PARA DETENER UN CICLO EN WHILE";

$a=1;
while ($a <= 10) {
    echo "<br> el numero de contador es $a";
    if ($a == 6) {
        echo "<br>el contador llego al punto maximo";
        break;
    };
    $a++;
};