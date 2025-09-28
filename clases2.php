<?php


class UnMetodo{

    //son metodos que no necesitas crear un objeto para poder usarlo.
    public static function metodoIniciador(){
        echo "no necesito iniciar para poder hacer uso de este metodo.";
    }
}


UnMetodo::metodoIniciador();


?>