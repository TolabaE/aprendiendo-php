<?php
session_start();

//el metodo isset permite saber si un string esta vacio, retorna 1 si es verdadero o 0 si es falso
if (isset($_SESSION["usuario"])) {
    echo "session iniciada, nombre: ".$_SESSION["usuario"]." ,estado de la operacion: ".$_SESSION["estado"]."<br>";    
} else {
    echo "no hay datos para mostrar, posiblemente la session fue destruida";
}

?>