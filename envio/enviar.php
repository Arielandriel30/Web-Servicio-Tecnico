<?php

$destino= "ariel.landriel@hotmail.com";
$asunto = "Subject";
$nombre= $_post["Name"];
$email= $_post["Email"];
$asunto= $_post["Subject"];
$mensaje= $_post["Message"];

$contenido = "Nombre: " . $Name . "\nMail: " . $Email . "\nMensaje: " . $Message;
$header= "Enviado desde la pagina ITXEON";
mail:($destino, $asunto, $contenido, $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\", 1000) </script>";


?>