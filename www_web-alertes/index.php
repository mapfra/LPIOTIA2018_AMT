<?php
  // Include db config
  require_once 'inc_cnx.php';
  // Init vars
  $email = $password = '';
  $email_err = $password_err = '';

  // Process form when post submit
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Sanitize POST
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Put post vars in regular vars
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
   

    // Validate email
    if(empty($email)){
      $email_err = 'Please enter email';
    }

    // Validate password
    if(empty($password)){
      $password_err = 'Please enter password';
    }

    // Make sure errors are empty
    if(empty($email_err) && empty($password_err)){
      // Prepare query
      $sql = 'SELECT name, email, password, fonction FROM users WHERE email = :email';

      // Prepare statement
      if($stmt = $bdd->prepare($sql)){
        // Bind params
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        // Attempt execute
        if($stmt->execute()){
          // Check if email exists
          if($stmt->rowCount() === 1){
            if($row = $stmt->fetch()){
              $hashed_password = $row['password'];
              if(password_verify($password, $hashed_password)){
                // SUCCESSFUL LOGIN
                session_start();
                $_SESSION['fonction'] =$row['fonction'];
								$_SESSION['name'] = $row['name'];
							//	header('location: services.php');
               header('location:affichage_a.php');
              } else {
                // Display wrong password message
                $password_err = 'The password you entered is not valid';
              }
            }
          } else {
            $email_err = 'No account found for that email';
          }
        } else {
          die('Something went wrong');
        }
      }
      // Close statement
      unset($stmt);
    }

    // Close connection
    unset($bdd);
  }
?>

<!Doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<title>ISE</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.jpg" width="270"></a>
			</div>

			
		
		</div>
	</div> 
	<!-- /.navbar --> 

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<div style="background-color:black; opacity:0.5; height: 50px;" ><h1  class="lead">RAPIDE, FACILE, EFICACE</h1></div>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Accueil</a></li>
			<li class="active">Accès de l'utilisateur</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
			<header class="page-header">
					<h1 class="page-title">Se Connecter</h1>
				</header>

		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		<div class="panel panel-default">
		<div class="panel-body">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">   
			        <div class="form-group">
			          <label for="email">Email Address</label>
			          <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
			          <span class="invalid-feedback"><?php echo $email_err; ?></span>
			        </div>
			        <div class="form-group">
			          <label for="password">Password</label>
			          <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
			          <span class="invalid-feedback"><?php echo $password_err; ?></span>
			        </div>
			        <div class="form-row">
			          <div class="col">
			            <input type="submit" value="Login" class="btn btn-success btn-block">
			          </div>
			          <div class="col">
			            <a href="registre.php" class="btn btn-light btn-block">No account? Register</a>
			          </div>
			        </div>
		     </form>
				
			</div>
		</div>

	</div>
					
	</article>
			<!-- /Article -->
</div>
</div>	<!-- /container -->
	

	<footer>
	<div class="footer2">
		<div class="widget-body">
			<p class="text-right">
				<center>Copyright &copy; 2019, Groupe ISE, LPMI_IOTIA </center>
				</p>
		</div>
	</div>
	</footer>	
	
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>