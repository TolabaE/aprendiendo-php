<?php
//previamente creamos una base de datos en mysql con el motor phpmyadmin

//DATOS DE CONEXION AL SERVIDOR
$url_server = "localhost"; //para conectarme a la base de datos local.
$user = "root";
$password = "";

//el trycatch se usa como condicionales para detener la ejecucion del programa en caso de que ocurra algun error;
try{
    //conexion a la base de datos
    $conexion = new PDO("mysql:host=$url_server;dbname=datadb",$user,$password);
    //EL ATTR_ERRMODE es una constancia estatica, ya que no lleva parentesis,
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//le pasamos unos argumentos en caso que nos de error.
    
    //intruccion para insertar en la base de datos.
    $sql = "INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `dni`, `edad`) VALUES (NULL, 'bruno', 'figueroa', '23766226', '34');";
    //$conexion->exec($sql);//metodo de PDO que permite insertar valores a nuestra db con comandos de mysql.
    

    $get = "SELECT * FROM usuario";//instruccion a realizar
    $sentencia = $conexion->prepare($get);
    $sentencia->execute();//ejecuta el programa.
    $resultado = $sentencia->fetchAll(); //obtiene los valores.

    // print_r($resultado);
    foreach ($resultado as $key => $usuario) {
        echo ($usuario["nombre"]."<br>");
    }


    echo "conexion establecida";
}catch(PDOException $error){
    echo "conexion fallida: <br>".$error;
}

?>