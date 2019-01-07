<?php

$destinationEmail = $_POST["destinationEmail"];
$subject1 = $_POST["subject1"];
$message = $_POST["message"];
$link = "<a href='suckerpunchmail.net'>suckerPunchMail.net</a>";
//$headers = 'From: suckerpunchmail.net';

mail($destinationEmail, $subject1,

$message,
     
"From: SuckerPunchMail.net");

header("Location: sent.html")

?>