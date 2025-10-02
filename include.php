<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso del include</title>
</head>
<body>
    <?php
    //una de las formas de incluir otros archivos aqui.
    //el include llama al archivo pero si no existe o da algun error,el programa se seguira ejecutando.
    include "ciclos.php";

    echo "<br>AQUI ESTOY INCLUYENDO OTRO ARCHIVO PHP LLAMADO OPERADORES";
    //esta son las dos formas de llamar a otros archivos, y usando el include_one es otra forma de llamar al archivo pero en caso de estar repetido,
    //llamara una unica vez al archivo por mas que llame muchas veces.

    include_once "operadores_2.php";

    echo "<br> SI EL ARCHIVO NO EXISTE NOS DARA UN WARNING Y EL ARCHIVO SE SEGUIRA EJECUTANDO";

    include_once "multiplicar.php";

    //estoy incluyendo otro archivo donde me traigo la funcion calcular notas.
    include "./funciones.php";

    echo calcularNotas(100,60);

    echo saludar("Jorge");
    ?>

</body>
</html>
