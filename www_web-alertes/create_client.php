<!DOCTYPE html>
<html lang="fr">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Data of Sensor</title>
 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
     <link rel="stylesheet" href="assets/css/custom.css" />
  </head>
<body style="margin: 10px; padding: 50px; text-align: center;" >

<?php
 require_once 'header.php';
require_once 'inc_cnx.php';
require_once 'class/client_class.php';
require_once 'class/sensor_class.php';
require_once 'class/sensor_class.php';

$client = new Client($bdd);
$sensor = new Sensor($bdd);
 
// echo "<div class='right-button-margin'>";
//     echo "<a href='index.php' class='btn btn-primary pull-right'>VOIR TOUS LES CLIENTS</a>";
// echo "</div>";
 
// if the form was submitted 
if($_POST){
 
    // set product property values
    $client->nom = $_POST['nom'];
    $client->prenom = $_POST['prenom'];
    $client->sexe = $_POST['sexe'];
    $client->date_nais = $_POST['date_nais'];
    $client->address = $_POST['address'];
    $client->code_postal = $_POST['code_postal'];
    $client->email = $_POST['email'];
    $client->tel_per = $_POST['tel_per'];
    $client->tel_tutel = $_POST['tel_tutel'];
    $client->id_sensor = $_POST['id_sensor'];
    
    // create the product
    if($client->create()){
        echo "<div class='alert alert-success'>Client was créée</div>";
    
           }
     else{
        echo "<div class='alert alert-danger'>Unable created</div>";
    }
}
?>
<h1>CREATION DE NOUVEAU CLIENT</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<table class='table table-hover table-responsive table-bordered'>
  <tr>
     <td>Nom</td>
     <td><input type='text' name='nom' class='form-control' /></td>
     <td>Prénom</td>
     <td><input type='text' name='prenom' class='form-control' /></td>
 </tr>
 <tr>
     <td>Sexe</td>
     <td><select class='form-control' name="sexe">
                 <option> CHOIX</option>
                 <option value="F"> FEMME</option>
                 <option value="H">HOMME</option>
                
        </select>
    </td>
     <td>Date de naissance</td>
     <td><input type='date' name='date_nais' class='form-control' /></td>
 </tr>
 <tr>
     <td>Address</td>
     <td><input type='text' name='address' class='form-control' /></td>
     <td>Cpde_postal</td>
     <td><input type='text' name='code_postal' class='form-control' /></td>
 </tr>
 
 <tr>
     <td>Email</td>
     <td><input type='text' name='email' class='form-control' /></td>
     <td>Téléphone de l'individu</td>
     <td><input type='text' name='tel_per' class='form-control' /></td>
 </tr>
 <tr>
     <td>Téléphone_tutel</td>
     <td><input type='text' name='tel_tutel' class='form-control' /></td>
     <td>Sensor</td>
        <td>
        
        <?php
               
                $stmt = $sensor->getAllsensor();
                // put them in a select drop-down
                echo "<select class='form-control' name='id_sensor'>";
                    echo "<option>Select sensor..</option>";
                    while ($row_sensor = $stmt->fetch(PDO::FETCH_ASSOC)){
                        extract($row_sensor);
                        echo "<option value='{$id}'>{$libelle}</option>";
                    }
                echo "</select>";
            ?>
        </td>
 </tr>
 <tr>
        
        <td></td>
        <td></td>
        <td></td>
         <td>
            <button type="submit" class="btn btn-info">Enregistrer</button>
        </td>
          
    </tr>
        

</table>
</form>
<?php

// footer
include_once 'footer.php';
?>

</body>
</html>