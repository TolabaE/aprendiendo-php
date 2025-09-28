<?php

echo "CLASES EN PHP <br>";
//para la programacion orientada a objetos se usa clases.
class Persona{
    //propiedades de una clase;
    public $nombre;
    public $apellido;
    private $dni;
    public $edad;


    //asigno valores instanciados al momento de ser creado.
    function __construct($name,$last_name,$DNI,$age)
    {
        $this->nombre = $name;
        $this->apellido =$last_name;
        $this->dni = $DNI;
        $this->edad = $age;
    }

    public function nombreCompleto(){
        echo "Nombre: ".$this->nombre." , apellido: ".$this->apellido."";
    }
}

//apartir de la clase persona puedo crear una cuenta bancaria para cada estudiante.
class CuentaBancaria extends Persona{
    private $saldo;
    public $consultarSaldo;


    //ingresar dinero en cuenta.
    public function depositar($cantidad){
        return $this->saldo = $cantidad;//acceder a una propiedad privada.
    }

    //consultar saldo en cuenta
    public function consultarSaldo(){
        echo "usuario: ".$this->nombre." ,saldo: $".$this->saldo;
    }

    public function extraerDinero($extraer){
        if ( $this->saldo >= $extraer) {
            $this->saldo = $this->saldo - $extraer;
            $this->consultarSaldo();
        }else{
            echo "¡no posee dinero suficiente, ingrese otro monto!";
        }
    }

}

//crear un nuevo objeto a partir de la clase definida.
$eduardo = new Persona("Juan","Perez","12394939","24");

echo "<br>";
// echo $eduardo->nombreCompleto();

//podoemos heredar las propiedades y metodos apartior de una clase ya existente "HERENCIA".

$usuario1 = new CuentaBancaria("Miguel","Torres",12300432,20);
//hago uso de los metodos declarados.
$usuario1->depositar(30000);
$usuario1->extraerDinero(250000);


?>
