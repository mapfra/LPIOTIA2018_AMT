<?php
   require_once 'inc_cnx.php';
?>
<!Doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<title>ATM_PROJET</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >

	<link rel="stylesheet" href="assets/css/main.css">

</head>

<body class="home">

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.jpg" width="150"></a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="affichage_a.php">ACCUEIL</a></li>
			
					<li class="active">
						<a href="create_client.php" class="dropdown-toggle" data-toggle="dropdown">GESTION CLIENT</a></li>
					<li ><a href="logout.php">DECONNEXION</a></li>
				</ul>
			</div><!--/.nav-collapse -->
           
            <!-- div bienvenu -->
            <div>
                <center><h1 style="color:white">ESPACE DE GESTION DES ALERTES </h1>
                  <!--   <h3 style="color:white"><p>Vous ête <?php echo $_SESSION['name']; ?>, <?php echo $_SESSION['fonction']; ?></p><h3></center> -->
                </li>
            </div>
            <!--fin bienvenu -->
		</div>
	</div> 

                   
            </div>
	</div> 
	<!-- Header picture-->
	<header id="head">
		<div class="container">
			<div class="row">
				<div style="background-color:black; opacity:0.5; height: 50px;" ><h1  class="lead">RAPIDE, FACILE, EFFICACE</h1></div>
			</div>
		</div>
       
	</header>
	<!-- /Header -->