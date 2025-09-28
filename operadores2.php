<?php

//OPERADORES DE COMPARACION.

$valor=2;
var_dump($valor==="2");

$compare = 400;

#si el valor comapre es diferente de 400, en el primer ejemplo nos daria false.
var_dump($compare != 400);

#si el valor compare es diferente de 200, esto nos daria true.
var_dump($compare != 200);

//OPERADORES LOGICOS.

$numero_uno=5;
$numero_dos=10;

# el operador && unicamente devuelve verdadero si ambas operaciones son verdaderos
var_dump($numero_dos==10 && $numero_uno==5);

var_dump($numero_dos==10 && $numero_uno==57);//esta expresion devulve falso

# el operador || devulve verdadero con que una unica operacion devuelv verdadero,unicamente retorna falso si ambas lo son.
var_dump($numero_dos==7 || $numero_uno==3);//el resultado final es falso

var_dump($numero_dos==10 || $numero_uno==5);//el resultado final es verdadero.
