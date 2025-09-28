<?php
//sirven para almacenar informacion y se puede acceder desde cualquier pagina.
session_start();

$_SESSION["usuario"] = "Eduardo";
$_SESSION["estado"] = "logeado";

echo "session iniciada, nombre: ".$_SESSION["usuario"]." ,estado de la operacion: ".$_SESSION["estado"]."<br>";

?>