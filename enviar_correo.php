<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera los datos del formulario
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];
  
  // Configura el destinatario y otros detalles del correo
  $destinatario = 'diegortmoy@gmail.com';
  $asunto = 'Nuevo mensaje de contacto';

  // Crea el cuerpo del correo
  $cuerpo = "Nombre: $nombre\n";
  $cuerpo .= "Correo: $correo\n";
  $cuerpo .= "Mensaje: $mensaje\n";
  
  // Envía el correo
  $resultado = mail($destinatario, $asunto, $cuerpo);

  // Verifica el resultado del envío
  if ($resultado) {
    echo '¡Gracias por tu mensaje! Te responderemos pronto.';
  } else {
    echo 'Hubo un problema al enviar el mensaje. Por favor, inténtalo nuevamente.';
  }
}
?>
