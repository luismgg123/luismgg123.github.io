<?php
$nombre = $_POST['name'];
$mail = $_POST['mail'];
$telefono = $_POST['telef'];
$asunto = $_POST['asunto'];
$empresa = $_POST['msg'];

echo("nombre: ".$nombre."\nmail".$mail);

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su telefono es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $empresa . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'luismgg123@hotmail.com';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
