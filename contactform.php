<?php

echo "hola";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "info@idttecnologias.mx";
    $headers = "De: " . $mailFrom;
    $txt = "Recibiste un correo de " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers) or die("Error");

    echo "Tu mensaje fue enviado";
}

?>