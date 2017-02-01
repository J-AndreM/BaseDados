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
			<a class="navbar-brand" href="#"><center>Pesquisa de Carros:</center></a>
		</div>

		<div class="container">

			<div class="col-sm-4">
			</div>

			<div class="col-sm-4">

				<form action="ResultadoCarros.php" method="POST">
					<div class="form-group">
						<label for="Marca">Marca</label>
						<input type="text" class="form-control" id="Marca" name="Marca" required>
					</div>

					<div class="form-group">
						<label for="Modelo">Modelo</label>
						<input type="text" class="form-control" id="Modelo" name="Modelo">
					</div>

					<div class="form-group">
						<label for="NºLugares">NºLugares</label>
						<input type="text" class="form-control" id="NºLugares" name="NºLugares">
					</div>

					<div class="form-group">
						<label for="Combustivel">Combustivel</label>
						<input type="text" class="form-control" id="Combustivel" name="Combustivel">
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>  
			</div>

			<div class="col-sm-4">
				</div>
		</div>
		
		
		
		
	</body>
</html>