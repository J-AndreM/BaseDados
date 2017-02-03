<?php 

	$username = "2012145811";
	$password = "2012145811";
	$basedados = "bd_2012145811";
	$servidor = "delta.deec.uc.pt";
	if(isset($_POST['login-submit'])){
			$ligacao=mysqli_connect($servidor,$username,$password,$basedados);
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$NIF = $_POST['username'];
		$PASS = $_POST['password'];
		$SQL="SELECT * FROM Funcionario WHERE NIF = '$NIF' AND Pass = '$PASS'";

		if ($resultado=mysqli_query($ligacao,$SQL)){
			$num=mysqli_num_rows($resultado);
			if($num==0)
				$loginbool=FALSE;
			else
				$loginbool=TRUE;
		mysqli_close($ligacao);
		}
	}

?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Stand Rodas & Motores</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Stand Rodas & Motores</a>
				</div>
				
				<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
						<li class="#Lojas"><a href="Lojas.php">Lojas</a></li>                    
						</ul>
				</div><!--/.nav-collapse -->
		</div>
		</div>

		<!-- Pagina de Login !-->

		<div class="container">
			<?php
			if((isset($_POST['login-submit']) && isset($loginbool) && $loginbool==FALSE) || (!isset($_POST['login-submit']))){
				if(isset($loginbool) && $loginbool==FALSE)	{?>
			<div class="row">
				<div class="alert alert-danger">
					<strong>Login Failed!</strong> Try again!
				</div>
			<?php }?>

			<div class="col-md-6 col-md-offset-3">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="http://alunos.deec.uc.pt/~a2012145811/Login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

			<!-- Login Efectuado !-->

			<?php
				if(isset($_POST["username"]) && isset($loginbool) && $loginbool==TRUE){
			?>	
				<div class="row">
					<div class="alert alert-success">
						<strong>Login Succefull!</strong> YES!
					</div>
				</div>
			<?php }?>
		</div>

	</body>
</html>