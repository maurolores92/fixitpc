<?php
$destino = "maurolores1992@gmail.com";
$nombre = $_POST ['nombre'];
$celular = $_POST ['celular'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];

$header = "Content-Type: text/plain"
$mensajeCompleto = "\n Nombre : " . $nombre . "\n" . "Email: " . $email . "\n" . "Numero de telefono: " . $celular . "\n" . "Mensaje : " . $mensaje;

mail($destino, $mensajeCompleto, $header);

header('Location: exito.html');

?>