<?php


$nombre = "";


if ($_POST) {
    # code...
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
            background-color: #6595c5ff;
        }
        input{
            width: 100%;
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
    </style>
</head>
<body>
    <h1>Hola mundo</h1>
    <div>
        <p>formulario de carga de datos</p>
    </div>
    <section class="container-form">
        <h2>cargar datos aqui</h2>
        <form action="forms.php" method="post" style="display:flex;flex-direction:column;padding:30px;gap:20px;background:red;width:400px;border-radius:10px;">
            <label for="nombre"> Ingrese su nombre:
                <input type="text" name="first_name">
            </label>
            <label for="apellido"> Ingrar el apellido: 
                <input type="text" name="last_name">
            </label>    
            <label for="edad"> ingresar la edad:
                <input type="number" name="age">
            </label>
            <label for="dni"> ingrese el DNI: 
                <input type="number" name="dni">
            </label>
            <input type="button" value="enviar">
        </form>
    </section>


</body>
</html>