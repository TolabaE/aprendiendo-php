<?php

$cadena_texto ="FUNCIONES PARA CADENAS DE TEXTOS";

// la funcion strtolower convierte a un texto en mayuscula a pasa aminuscula.
echo strtolower("todo el texto es pasado a minuscula =>".$cadena_texto);

$primera_mayuscula = "mi nombre es eduardo";

$cadena_mayuscula ="actualmente estoy escrito en minuscula";

echo "<br><br>Esta funcion convierte todo el texto a mayuscula".strtoupper($cadena_mayuscula);

echo "<br><br> en esta funcion convirtio la primera letra en mayuscula =>".ucfirst($primera_mayuscula);

$primera_mayuscula_decadapalabras="actualmente soy desarrollador backend en php";

echo "<br><br>Esta funcion convirtio la primera letra de cada palabra en mayuscula =>".ucfirst($primera_mayuscula_decadapalabras);

echo "<br><br> FUNCIONES PARA CONTAR CARACTERES";


$palabra_longuitud = "hola esta palabra tiene una larga longuitud de caracteres de acuerdo a la cantidad de palabras que tenga <br>";
echo "tiene ".strlen($palabra_longuitud); 

echo "<br><br>// FUNCIONES PARA CONTAR EL NUMERO DE PALABRAS";

echo "<br> el numero de palabras del texto es :".str_word_count($palabra_longuitud);

echo "<br>funcion para convertir cadenas de  texto en arreglos";

$palabra__arreglo="hola como estan soy eduardo";
$palabra_fecha ="19/01/2001";
$palabra_componente="procesador-placabase-fuente-ram";

#recibe tres parametros, el primero el delimitador,segundo la cadena de texto y tercer el limitador(el limitador recibe un numero de acuerdo a la posicion);

$array_texto = explode(' ',$palabra__arreglo);
$array_texto = explode('/',$palabra_fecha);
$array_texto = explode('-',$palabra_componente);

echo "<br>".$array_texto[3];#para poder ver la posicion del arreglo.
echo "<br>".$palabra_fecha[1];
echo "<br>".$palabra_componente[2];
