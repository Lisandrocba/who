<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$linkedin = $_POST['linkedin'];
$cv = $_POST['cv'];

$destinatario = "lisandrocba7@gmail.com";
$asunto = "Envio de pagina web who consultora";

$carta = "De: $nombre \n";
$carta .= "mail: $mail \n";
$carta .= "linkedin $linkedin \n";
//$carta.= "cv: $cv";

mail($destinatario, $asunto, $carta);
header('location:trabajo.html');

?>