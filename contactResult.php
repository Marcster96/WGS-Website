<?php
$emphaenger = "marc.mayer96@outlook.de";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$betreff = "Kontaktaufnahme - " + $name;
$nachricht = "E-Mail: " + $email + "\n" + "Nachricht: " + $message;


mail($emphaenger,$betreff,$nachricht);
?>