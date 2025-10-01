<?php

$nombre = "";
$apellido = "";
$edad = "";

$genero = "";
$cajaAhorro = "";
$textcomment ="";

if ($_POST) {
    $nombre = isset($_POST['first_name'])?$_POST['first_name']:"";
    $apellido = isset($_POST['last_name'])?$_POST['last_name']:"";
    $edad = isset($_POST['age'])?$_POST['age']:"";

    $genero = isset($_POST['gender'])?$_POST['gender']:"";


    $chkpri = isset($_POST['chkpri']) == "si"? "checked":"";
    $chksec = isset($_POST['chksec']) == "si"? "checked":"";
    $chkuni = isset($_POST['chkuni']) == "si"? "checked":"";

    $cajaAhorro = isset($_POST["bank"])?$_POST['bank']:"";
    $textcomment = $_POST['comentario'];

    print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enviando datos</title>
    <style>
        body{
            background-color: #fcdebe;
        }
        .container-form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        label{
            color: beige;
        }
        form{
            display:flex;
            flex-direction:column;
            padding:30px;
            gap:20px;
            background:#5E5768;
            width:400px;
            border-radius:10px;
        }
        .btn-submit{
            padding: 8px;
            border-radius: 5px;
            border: 0;
            background-color: #D4D2A5;
        }
        .container-radius{
            flex-direction: column;
            align-items: flex-start;
        }
    </style>
</head>
    <body>
        <h1>Hola mundo</h1>
        <div>
            <p>formulario de carga de datos</p>
        </div>
        <section class="container-form">
            <h2>cargar datos aqui</h2>
            <form action="formularios.php" method="post">
                <label for="nombre"> Ingrese su nombre:
                    <input type="text" name="first_name">
                </label>
                <label for="apellido"> Ingrese el apellido:
                    <input type="text" name="last_name">
                </label>
                <label for="edad"> ingresar la edad:
                    <input type="number" name="age">
                </label>
                <div class="container-radius">
                    seleccione el sexo: <br>
                    <label for="">Masculino: <input type="radio" name="gender" value="male"></label>
                    <label for="">Femenino: <input type="radio" name="gender" value="female"></label>
                    <label for="">No binario:<input type="radio" name="gender" value="binary"></label>
                </div>
                <div>
                    <label for="">Estudios alcanzados:</label> </br>
                    Primario: <input type="checkbox" name="chkpri" value="si" <?php echo $chkpri ?> >
                    Secundario: <input type="checkbox" name="chksec" value="si" <?php echo $chksec ?> >
                    Universitarios: <input type="checkbox" name="chkuni" value="si" <?php echo $chkuni ?> >
                </div>
                <p>Seleccione el tipo de banco:</p>
                <select name="bank">
                    <!-- verifico si el valor seleccionado es igual a la condicion entonces que me seleccione esa opcion, usando operador ternarioo -->
                    <option value="nacion" <?php echo ($cajaAhorro == "nacion") ? "selected": "" ?> >Banco Nacion</option>
                    <option value="icbs" <?php echo ($cajaAhorro == "icbs") ? "selected": "" ?> >Banco ICBS</option>
                    <option value="galicia" <?php echo ($cajaAhorro == "galicia") ? "selected": "" ?> >Banco Galicia</option>
                    <option value="other" <?php echo ($cajaAhorro == "other") ? "selected": "" ?> >Otro</option>
                </select>
                <label for="">¿tenes alguna consulta?:</label>
                <textarea name="comentario" cols="30" rows="10">

                </textarea>
                <input type="submit" value="enviar" class="btn-submit">
            </form>
        </section>
        
        <div>
            <!-- permite tener html embebido con codigo php -->
            <?php if ($_POST) { ?>
                <strong>Nombre del usuario </strong>: <?php echo $nombre;?> <?php
            }
            ?>
        </div>

    </body>
</html>
