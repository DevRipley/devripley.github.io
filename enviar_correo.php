php
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $nombre = $_POST["nombre"];
       $email = $_POST["email"];
       $mensaje = $_POST["mensaje"];
   
       $para = "luisdestrella@gmail.com";
       $asunto = "Te ha llegado un mensaje desde el portafolio";
       $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
       $cabeceras = "From: $email";
   
       if (mail($para, $asunto, $cuerpo, $cabeceras)) {
           echo "Mensaje enviado con éxito.";
       } else {
           echo "Error al enviar el mensaje.";
       }
   }
   ?>