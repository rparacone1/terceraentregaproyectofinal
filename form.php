<?php
// Capturo info que se ingresa en imputs del formulario //

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];


// destinatario //

$para = 'renato.paracone@hotmail.com';
$asunto = 'Este mail fue enviado desde la web';

// Funcion que envia la info del form//
mail($para, $asunto, utf8_decode($mensaje));

header('Location:exito.html')



?>