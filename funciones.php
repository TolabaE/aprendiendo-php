<?php


echo "LAS FUNCIONES EN PHP";

//el proposito de las funciones es reutilizar codigo que puede ser utilizado mas adelante. sin tener que estar repitiendo lo mismo.
function saludar ($nombre){
    echo "<br>hola como estas soy $nombre saludos a todos.";
}

$persona = "CAMILA CARDOZO";
saludar('eduardo');
saludar($persona);


function calcularNotas($total,$valor){
    $result = $total - $valor;
    echo "<br>el resultado total de la operacion es $result";
}

calcularNotas(100,60);

echo "<br>";
//hago uso de una funcion de php,que genera numeros aleatorios.
$randomNum = rand(0,10);

echo $randomNum;

?>