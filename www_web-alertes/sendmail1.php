
<?php
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
require_once 'header.php';
require_once 'inc_cnx.php';
require_once 'class/client_class.php';
require_once 'class/alerte_class.php';
$alerte = new Alerte($bdd);
$client = new Client($bdd);
$alerte->id = $id;
echo $id;

$client->id = $alerte->id_client;
$client->readPropertiesName();
              

$titre='Zone Administrateur - envoie email';
// ini_set('SMTP','localhost');
// ini_set('smtp_port',25);

 
$data= $client->email;

    
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "...:::: TEST ::::...";
$message_html = "<html><head></head><body>...:::: TEST ::::...</body></html>";
//==========
  
  
//=====Définition du sujet.
$sujet = "Alerte de chute ...";
//=========
  
//=====Création du header de l'e-mail.
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From : toto@gmail.com\n";
//==========
  
//=====Ajout du message au format HTML
$message ='<html>
<head>
<title>Alerte du jour</title>
</head>
<body> ';
 
  
//=====Envoi de l'e-mail.
if(mail($data,$sujet,$message,$headers)) echo "Envoi du mail réussi.";
   else echo "Echec de l’envoi du mail.";
     
?>