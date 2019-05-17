<!DOCTYPE html>
<html lang="fr">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Data of Sensor</title>
 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
     <link rel="stylesheet" href="assets/css/custom.css" />
     
     <link rel="stylesheet" href="menu/css/style.css" />
     <script>
     function valider(numelement){
        let element = document.getElementById(numelement);
        element.innerText = "1";
        console.log(element);
     }
     </script>
  </head>
<body style="margin: 30px; padding: 50px; text-align: center;" >
<br>
<br>
<br>
<br>
<br>

<?php
require_once 'header.php';
require_once 'inc_cnx.php';
require_once 'core.php';
require_once 'class/client_class.php';
require_once 'class/alerte_class.php';
require_once 'class/sensor_class.php';

$client = new Client($bdd);
$alerte = new Alerte($bdd);
$sensor = new Sensor($bdd);

// query alerte
$stmt = $alerte->readAll($from_record_num, $records_per_page);

// count total rows - used for pagination
$total_rows = $alerte->countAll();
$page_url = "affichage_a.php?";
?>
<?php
if($total_rows>0){
  echo"<h1>ALERTES RECUES DE L'ACCELEROMETRE ET PIR SENSOR DE AMT</h1>";
 echo" <br>";
 echo" <br>";
      echo "<table class='table table-hover table-responsive table-bordered'>";
            echo "<tr bgcolor='olive'; opacity:0.2; style='color:white;'>";
                echo "<th>Potentielle Alerte</th>";
                echo "<th>Datetime_Alerte</th>";
                echo "<th>Nom du Capteur</th>";
                echo "<th>Nom de Client</th>";
                echo "<th>Etat de traitement</th>";
                
                echo "<th>Actions</th>";
            echo "</tr>";
                 
          echo "<tr>";
          $num = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $num++;
                extract($row);
                echo "<td>{$potentielle_alerte}</td>";
                echo "<td>{$datetime_alerte}</td>";
                echo "<td>";
                    $sensor->id = $id_sensor;
                    $sensor->readPropertiesName();
                echo $sensor->libelle;
                echo "<td>";
                    $client->id = $id_client;
                    $client->readPropertiesName();
                echo $client->nom. " ". $client->prenom;
                echo "</td>";
                echo "<td id='etat$num'>{$etat_trait}</td>";
               
                echo "<td>";
                 ?>
                 <button type='button' class='btn btn-info' onclick="valider('etat<?php echo $num ?>')">VALIDER</button>
                                
               <?php
             
                echo "<a href='sendmail.php' class='btn btn-primary left-margin' '>";
                    echo "<span class='glyphicon glyphicon-envelope'> MAIL</span>";
                echo "</a>"; 

                 echo "<a href='#' class='btn btn-success left-margin' '>";
                    echo "<span class='glyphicon glyphicon-phone-alt'> TEL</span>";
                echo "</a>";

            echo "</td>";
 
            echo "</tr>";
        }
     echo "</table>";
 
// paging buttons
include_once 'paging.php';

}
 
// tell the user there are no item
else{
    echo "<div class='alert alert-danger'>No alerte found.</div>";
}
include_once 'menu/menu.php';
?>