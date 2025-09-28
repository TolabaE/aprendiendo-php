<?php

echo "tema: ciclos ,bucles o loops.";

echo "<br>CICLO WHILE";#en español significa mientras se cumpla la condicion.

$c=1;

//si el valor contador es menor o igual a 10 se ejecuta el codigo que esta dentro de la condicion
while ($c <=10) {
    echo "<br>";
    echo $c;
    $c++;
}

echo "<br/> Imprimir su tabla de acuerdo a un numero dado.";

$numero = 5;
$a=1;

while ($a <= 10) {
    echo "<br/>";
    $result = $a * $numero;
    echo "<span/>$numero x $a = $result <span>";
    $a++;    
}

//Imprimir los numeros de una tabla en forma decreciente.
echo "<br>Imprimir los numeros de una tabla en forma decreciente.";
$i=10;
$mult=8;

while ($i >= 1) {
    // $total=$mult*$i;
    $resultado = $i * $mult;
    echo "<br><span/>$mult x $i = $resultado<span>";
    $i--;
}

echo "<br>CICLO DO WHILE";//que significa hacer cierta cosa mientras,

//la unica diferencia es que primero ejecuta el codigo y despues verifica la condicion.
$a = 1;
do {
    echo "<br>mientras el contador = $a sigua siendo menor o igual a 10 se ejecuta esta linea.";
    $a++;
} while ($a <= 5);

echo "<br> CICLO FOR";

for ($i=0; $i < 10; $i++) { 
    echo "<br>mientras el contador $i siga siendo menor a 10 mostramos esta linea.";
}