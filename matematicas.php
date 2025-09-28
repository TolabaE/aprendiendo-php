<?php

echo "//EN PHP EXISTEN MUCHAS FUNCIONES MATEMATICAS,AQUI SE MOSTRARAN ALGUNAS Y  LAS MAS IMPORTANTE";

#funcion que saca la exponencial de  acuerdo a los parametros.
echo "<br>".pow(4,2);

#calcula  la raiz cuadrada y cubica;
echo "<br>".sqrt(9);

#con pi obtenemos el valor de PI; que es 3.1416
echo "<br>".pi();

#redondean un numero entero hacia abajo,
echo "<br>".floor(4.2);# 4

#redondea fraciones hacia arriba
echo "<br>".ceil(4.2);# 5

#lo redondea de acuerdo  al valor de los decimales
echo "<br>".round(99.991313,1);

echo "<br>".round(99.3438381,3);

echo "<br>//FUNCION PARA FORMATEAR NUMEROS";

$number_format=12311.91932;
$number2_format=2178932.78676;


#la funcion number_format(cantidad,decimales,sep_decimales-sep_millar)son los paramatros que recibe
echo "<br>".number_format($number_format);
echo "<br>".number_format($number2_format);