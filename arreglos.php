<?php

echo "ARREGLOS BASICOS <br>";
$frutas = array("manzana","pera","banana","frutilla","naranja","kiwi");


$vehiculos = array("auto"=>"renault","tractor"=>"fiat 780","moto"=>"honda XR 150","camioneta"=>"volkswagen amarok v6");
//para imprimir un arreglo de string se puede hacer con print_r;

//entre los corchetes podes acceder al valor de un arreglo en especifico.
print_r($frutas);
echo "<br>";
print_r($vehiculos["moto"]);


echo "PARA LEER UN ARREGLO PODEMOS USAR UN CICLO FOR <br> <br>";

//itera un arreglo empezando del indice 0 hasta la longuitud del arreglo;
for ($i=0; $i < count($frutas) ; $i++) {
    echo $frutas[$i]."<br>";
}

//en este caso no podemos usar el indice, ya que deja de ser un numero y tiene valores propios.
foreach ($vehiculos as $key => $auto) {
    echo "vehiculos:$key es igual a => $auto <br>";
}
