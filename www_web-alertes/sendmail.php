<?php
$to = 'localhost.nguyenthanhmary@yahoo.fr';
$subject = 'ALERTE de LOCALHOST';
$message = 'send from localhost';
$headers = 'From: onlytest@gmail.com';
if(mail($to,$subject,$message,$headers)) echo "Envoi du mail réussi.";
   else echo "Echec de l’envoi du mail.";

?>