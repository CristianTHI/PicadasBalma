<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$picada = $_POST['picada'];
$horario = $_POST['horario'];
$chica = $_POST['chica'];
$grande = $_POST['grande'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/".phpversion();
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
header("Location:../../thanks_pedido.html");
                         
$mensaje = "Este pedido fue enviado por " . $nombre . ",
 de la direccion " . $direccion . " el telefono es " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El cliente ha solicitado una picada: " . $chica . " \r\n";
$mensaje .= "El cliente ha solicitado una picada: " . $grande . " \r\n";
$mensaje .= "Comentarios: " . $_POST['comentarios'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'cristianl@thinkion.com.ar';
$asunto = 'Pedido nuevo recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>