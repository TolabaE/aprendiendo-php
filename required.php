<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso del require</title>
</head>
<body>
    <?php
    
    //si el archivo no existe te lanza un error y el programa se detiene ya que el archivo pasa a ser indispensable para su ejecucion.
    require "./operadores2.php";

    //usando el required_one es otra forma de llamar al archivo pero en caso de estar repetido el archivo, lo llamara una unica vez.
    require_once "ciclos.php";
    require_once "ciclos.php";
    // require "./operadore10.php";#esta linea daria error
    
    ?>


</body>
</html>
