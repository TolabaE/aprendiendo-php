<?php

echo "EJEMPLO DE CONDICIONAL SIMPLE";
$valor=10;
if (15>= $valor) {
    echo "si 15 es mayor que el valor $valor";
}else{
    echo "no,el numero 15 no es mayor que el valor $valor";
}
#expresion alternativa.
if(12>=10):
    echo "si el valor de la izquierda es mayor que de la derecha";
endif;
echo "EJEMPLO DE CONDICIONAL DOBLE";

echo "OPERADOR TERNARIO";

(10>7) ? $numero1="si el numero es mayor, que la izquierda" : $numero1="falso, el numero de la izquierda no es mayor que de la derecha";

echo $numero1;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <!-- incrustamos la condicional en el archivo html -->
        <?php  if(12>=10): ?>
            <br>
            <h2>si el valor de la izquierda es mayor que de la derecha</h2>
        <?php endif; ?>
        <!-- al finalizar la condicion aplicamos otra etiqueta de cierre -->
    </div>
    <b>otra alternativa</b>
    <div>
        <!-- incrustamos la condicional en el archivo html -->
        <?php  if(8<10){ ?>
            <br>
            <h2>si el valor de la derecha  es mayor que el de la izquierda.</h2>
        <?php } ?>
        <!-- al finalizar la condicion aplicamos otra etiqueta de cierre -->
    </div>
</body>
</html>