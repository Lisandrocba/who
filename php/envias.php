<?php


if(isset($_POST['enviar'])){
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$linkedin = $_POST['linkedin'];


$destinatario = "lisandrocba7@gmail.com";
$asunto = "Envio de pagina web who consultora";

$carta = "De: $nombre \n";
$carta .= "mail: $mail \n";
$carta .= "linkedin $linkedin";


$header = "from: noreplay@example.com" . "\r\n";
$header .= "replay-to: noreplay@example.com" . "\r\n";
$header .= "x-mail: php/" . phpversion();
$mail = mail($destinatario, $asunto, $carta, $header);

if($mail){
    echo "<h4>enviado</h4>";
}
}

?>