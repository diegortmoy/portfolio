<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  
  // Configura los detalles del correo electrónico
  $destinatario = 'diegortmoy@gmail.com'; 
  $cabeceras = "From: $nombre <$email>" . "\r\n";
  
  // Envía el correo electrónico
  if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
    echo "Correo enviado exitosamente";
  } else {
    echo "Error al enviar el correo";
  }
}
?>

