<?php
$nombre = $_POST['nombre'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . "\r\n";


$para = 'mgallardovicente50@gmail.com';
$asunto = 'Solicitud de servicio';

mail($para, $asunto, utf8_decode($message), $header);

 header("Location:solicitud.html");
 ?>