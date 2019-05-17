<?php
// Init session
	session_cache_limiter('nocache');

	// //-- Autoloader de classes	
	// function chargerclasse($classe){
	// 	require "class/".$classe . "_class.php"; 
	// }
	// spl_autoload_register ("chargerClasse");
	  
	// //-- Initialise une session
	// $se = new se();
	// 	$se->start();
	
 //	===========================
//		Connexion
//	===========================
require_once 'class/cnx_class.php';
$cnx = new cnx();
	
if ($cnx->connect() == false){
  echo $cnx->liberr."<br>";
  echo $cnx->messerr."<br>";
  $_SESSION['Serr'] = "9|BDD indisponible !";
  header("Location: login.php");
  exit();
}else{
  $bdd = $cnx->bdd;
}
?>