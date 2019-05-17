<?php
  // Include db config
  require_once 'inc_cnx.php';
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body id="www-cssplay-co-uk">
<?php
   
  require_once 'header.php';


?>
<form action="" method = "POST">
<div id="info">
	<div class="stretchHolder">
		<div class="stretchMenu">
			<ul class="stretchDrop">
				<!-- item 1 -->
				<li class="slide p1"><a href="#url">Appels Urgences</a><div><b></b>
					<dl><!-- sous menu 1 -->
					<dt>Urgences</dt>
						<dd><a href="url">Samu - 15</a></dd>
						<dd><a href="url">Police Secours - 17</a></dd>
						<dd><a href="url">Pompiers - 18</a></dd>
						<dd><a href="url">Général - 112</a></dd>
						
					</dl>
					
					<dl><!-- sous menu 2 -->
					<dt>Hopitaux</dt>
						<dd><a href="url">AIX</a></dd>
						<dd><a href="url">CONCEPTION</a></dd>
						<dd><a href="url">LACHET</a></dd>
						<dd><a href="url">PASTEUR</a></dd>
						<dd><a href="url">TIMONE</a></dd>
					</dl>
					<dl><!-- sous menu 2 -->
					<dt>Gendarmerie</dt>
						<dd><a href="url">AIX</a></dd>
						<dd><a href="url">CONCEPTION</a></dd>
						<dd><a href="url">LACHET</a></dd>
						<dd><a href="url">PASTEUR</a></dd>
						<dd><a href="url">TIMONE</a></dd>
					</dl>
											
				</li>
				<!-- item 2 -->
				<li class="slide p2"><a href="#url">Intervenances</a><div><b></b>
					<dl><!-- sous menu 1 -->
						<dt>Medecins</dt>
							<dd><a href="url">Psychologue</a></dd>
							<dd><a href="url">General</a></dd>
							<dd><a href="url">Specialiste</a></dd>
						</dl>
					<dl><!-- sous menu 2 -->
				
					<dt>Pompiers</dt>
						<dd><a href="url">06</a></dd>
						<dd><a href="url">13</a></dd>
					</dl>

				</li>
				<!-- item 3 -->
				<li class="slide p3"><a href="#url">Messagerie</a><div><b></b>
					<dl>
						<dt>Chat_Administration </dt>
						<dd><a href="url">Standard</a></dd>
						<dd><a href="url">Telephone</a></dd>
					</dl>
					<dl>
					<dt>Chat_Info</dt>
						<dd><a href="url">Standard</a></dd>
						<dd><a href="url">Telephone</a></dd>
					</dl>
					<dl>
						<dt>Chat_Info</dt>
						<dd><a href="url">Standard</a></dd>
						<dd><a href="url">Telephone</a></dd>
					</dl>
					
				</li>
				
				<li class="slide p4"><a href="#url">Assistances</a><div><b></b>
					<dl><!-- sous menu 1 -->
						<dt>Assurances</dt>
						<dd><a href="url">ATP</a></dd>
						<dd><a href="url">OJN</a></dd>
						<dd><a href="url">CHN</a></dd>
					</dl>
					<dl><!-- sous menu 2 -->
						<dt>Techniciens</dt>
						<dd><a href="url">Electricite</a></dd>
						<dd><a href="url">Telephone</a></dd>
						<dd><a href="url">Photocopier</a></dd>
						<dd><a href="url">Projecter</a></dd>
					</dl>
					<dl><!-- sous menu 3 -->
						<dt>Ingeniers</dt>
						<dd><a href="url">Developper</a></dd>
						<dd><a href="url">Réseau</a></dd>
					</dl>

					
				</li>

				<li class="slide p5"><a href="#url">Retour de Clients</a><div><b></b>
					<dl><!-- sous menu 1 -->
					<dt>Messages</dt>
						<dd><a href="url">Demandes</a></dd>
						<dd><a href="url">Receptions</a></dd>
						
					</dl>
					
				</li>

			</ul>
		</div>
	</div>
</div>

</form>


<?php
  // Include db config
 
  require_once 'footer.php';
  
?>

</body>
</html>
















<!-- 
<center><div class="shadowbox">
<h1>Résume de votre commande</h1>

Nom de produit: ECRAN <br/><br/>
Nombre: <select> 
<?php 
							for($i=1; $i<=10; $i++)
							{ ?>
							<option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>  
			 </select>
Date-souhaitée <input type="text" size= "20" name="date"></p>
Votre nom: 		<input type="text" size= "20" name="nom"/>
Prenom: 		<input type="text" name="prenom"/><br/><br/>
A :  		<select  name="expert">
					<option>Choix</option>
					<option>Thanh-Developer</option>
					<option>Annatoli-Informaticien </option>
					<option>Sophyane-Maintenance</option>
					<option>Gaetan-Electricien</option>
				</select>
Du service: 	<select  name="service">
					<option>Choix</option>
					<option>Informatique</option>
					<option>Communication </option>
					<option>Maintenace</option>
					<option>Logistique</option>
				</select><br/><br/>
Votre message <textarea size = "100" id="idees"></textarea>

				<input type="submit" value="Envoyer"/>

</div></center>
</br></br></br></br> -->