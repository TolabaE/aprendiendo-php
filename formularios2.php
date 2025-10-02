<?php

if ($_POST) {
    print_r($_POST);
    print_r($_FILES['archivo']);

    // para poder copiar y subir un archivo o imagen necesitamos darle permisos a la carpeta
    //luego usamos la propiedad y pasamos como primer parametro para obtener el archivo temporal y como segundo paramtro le pasamos el nombre que va a tener.
    move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carga de archivos</title>
</head>
<body>
    <!-- formularios para enviar archivos de tipo file -->
    <form action="formularios2.php" method="post" enctype="multipart/form-data">
        <label for="">carga tu foto aqui: </label> <br>
        <input type="file" name="archivo" id="">
        </br>
        <input type="submit" value="enviar imagen" name="enviar">
    </form>
</body>
</html>


