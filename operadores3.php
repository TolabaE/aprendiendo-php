<?php

//OPERADORES DE INCREMETO
$sumar = 10;
#En este caso al imprimir resultado lo que se mostrara en pantalla es el valor 10 ya que primero asigna y despues suma
#Si queremos saber el valor cuanto a incrementado, tenemos que imprimir la variable sumar.

#operacion de posincremento.
echo "operadores de incremento =>";
$resultado=$sumar++;
echo $resultado; #aqui se mostrara el valor 10,ya que primero asigna y despues hace la incrementacion.
echo $sumar; #aqui se mostrara el valor 11


#operacion de preincremento.
$eltotal=15;
$saldo=++$eltotal;
echo $saldo;#aqui se imprimira el valor 16 ya que primero suma y despues asigna.
echo $eltotal;#imprime 16.

echo "operadores de decremento =>";
//operaciones de predecremento;
$restar = 5;
// echo --$restar; imprime el valor 4
$result = --$restar;
echo $result; #imprime el valor 4 ya que primero resta y despuesasigna.
//operadores de postdecremento.
$resto2=20;
echo $resto2--;#elresultado es 20 ya que primero asigna y despues resta.

$total=40;
$resuelto = $total--;//el valor es 40 ya que primero asigna y despues resta.
echo $resuelto;
echo $total;//el resultado es 39 ya que el resto ya lo hizo anteriormente.
