<?php
//una de las formas de incluir otros archivos aqui.
include ("ciclos.php");

echo "<br>AQUI ESTOY INCLUYENDO OTRO ARCHIVO PHP LLAMADO OPERADORES";
//esta son las dos formas de llamar a otros archivos
include "operadores.php";

echo "<br> SI EL ARCHIVO NO EXISTE NOS DARA UN WARNING Y EL ARCHIVO SE SEGUIRA EJECUTANDO";

include "multiplicar.php";

//estoy incluyendo otro archivo donde me traigo la funcion calcular notas.
include "./funciones.php";

echo calcularNotas(100,60);

echo saludar("Jorge");