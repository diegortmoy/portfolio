<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];
  
  // Configura los detalles del correo electrónico
  $destinatario = 'diegortmoy@gmail.com'; 
  $cabeceras = "From: $name <$mail>" . "\r\n";
  
  // Envía el correo electrónico
  if (mail($destinatario, $message, $cabeceras)) {
    echo "Correo enviado exitosamente";
  } else {
    echo "Error al enviar el correo";
  }
}
?>

