<?php
//OPEREDORES ARIGMETICOS.
$numero_uno = 3;
$numero_dos= 10;

$resultado = $numero_dos % $numero_uno;

echo $resultado;

//OPERADORES DE ASIGNACION.

#puede asignar en una concatenacion una cadena de texto y numeros
$texto="Hola soy eduardo y tengo ";
$texto.= 22;

echo $texto;

//ASIGNACION POR REFERENCIA.    

$pais ="argentina";

$variable1 = $pais;//asignacion normal, accede directamente al primer valor que se le asigno a la variable,

$variable2 = &$pais;//la asignacion por referencia toma el valor de la variable y y sea cualquiera su contenido;

echo $variable1;
echo $variable2;

$pais = "Brasil";

echo $variable2;
