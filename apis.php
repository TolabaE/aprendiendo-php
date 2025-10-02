<?php
//CONSUMIENOD APIS EXTERNAS. USANDO LA API DE DAILYMOTION.
$api_url ="https://api.dailymotion.com/videos?channel=sport&limit=10";

//desactivamos los codigos de seguridad https para poder hacer uso sin problema.
$option = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

//le paso los valores de la url, un paramtro en false en caso de querer enviar datos y las opciones antes configuradas.
$respuesta = file_get_contents($api_url,false,stream_context_create($option));

//hacemos la decodificaciona del json
$datos = json_decode($respuesta);

//recorro el arreglo con un foreach.

?>

<!-- uso los datos de la api para mostrarlo en un etiqueta de hmtl -->
<ol>
    <?php
        foreach ($datos->list as $videos) {
        ?><br><?php
        ?><li> <?php echo $videos->title; ?> </li><?php
        ?><li> <?php echo $videos->channel; ?> </li><?php
    }?>
</ol>




