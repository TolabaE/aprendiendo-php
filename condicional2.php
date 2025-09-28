<?php
//crea una funcion que permita ingresar personas si son mayor de edad.



//crea un condicional que valide el dia de la semana de acuerdo al orden de dias.
$dia = 10;

if ($dia === 1) {
    echo "hoy es lunes";
} elseif ($dia === 2) {
    echo "hoy es martes";
} elseif ($dia === 3) {
    echo "hoy es miercoles";
} elseif ($dia === 4) {
    echo "hoy es jueves";
} elseif ($dia === 5) {
    echo "hoy es viernes";
} elseif ($dia === 6) {
    echo "hoy es sabado";
} elseif ($dia === 7) {
    echo "hoy es domingo";
}else{
    echo "no es ningun dia de la semana";
}

//ESTRUCUTURA MATCH
$valor = 10;


#se pasa por parametro un valor o un boleano,
$resultado = match (true) {
    $valor > 18 => "Eres mayor de 18 años",
    $valor < 18 => "Eres menor de edad",
    default => "no tienes nadaaa"
};
echo $resultado;

$otrovalor = 10;

$a= 5;
$x= 15;
$y= 10;

#se pasa por parametro y de acuerdo a este, hace la comparacion,
$resultado = match ($otrovalor) {
    $a => "El valor es igual a",
    $x => "El valor es igual x",
    $y => "El valor es igual y",
    default => "no tienes nadaaa"
};
echo $resultado;

//crea una logica que si el cliente gasto mas de 100 le aplique el 20% de descuento y le mostramos cuanto deberia pagar.


