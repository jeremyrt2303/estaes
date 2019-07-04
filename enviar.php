<?php 
$nombre = $_POST['nombree'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


$destinatario = "geremixd123@gmail.com";
$asunto = "Contacto desde nuestra web- ";

$carta = "De: $nombree \n";
$carta .= "Correo: $correo \n";
$carta .= "telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

mail($destinatario, $asunto, $carta);
header( 'Location:validar-mensaje.html');












 ?>

