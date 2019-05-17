<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Contact us - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">


</head>

<body>
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<!-- Button for smallest screens -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="index.php"><img src="assets/images/u6.png" width="150"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li class="active"><a href="index.php">Accueil</a></li>
						<!-- <li><a href="about.html">About</a></li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tous les services <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="services.php">Services</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</li>
						<li class="active"><a href="logout.php">DECONNEXION</a></li>
						
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div> 
		<!-- /.navbar --> 
	

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Accueil</a></li>
			<li class="active">Contact</li>
		</ol>

		<div class="row">
		
				<header class="page-header">
					<h1 class="page-title">Contactons-nous</h1>
				</header>
				
				<p>
					Nous aimerions recevoir de vos nouvelles. Merci de votre patience en attente notre réponse.
				</p>
				<br>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Nom">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Email">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Téléphone">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Votre message..." class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label class="checkbox"><input type="checkbox"> Inscrivez-vous à lettre d'info</label>
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Envoyer">
							</div>
						</div>
					</form>

			</div>
			
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>