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
			<a class="navbar-brand" href="#"><center>Introduzir dados para compra de Carro:</center></a>
		</div>

		<div class="container">

			<div class="col-sm-4">
			</div>

			<div class="col-sm-4">
			
			
				<form action="fazcompracarros.php" method="POST">
					<div class="form-group">
						<label for="Matricula">Matricula</label>
						<input type="text" class="form-control" id="Matricula" name="Matricula" required>
					</div>
					
					<div class="form-group">
						<label for="Modelo">Modelo</label>
						<input type="text" class="form-control" id="Modelo" name="Modelo" required>
					</div>
					
					<div class="form-group">
						<label for="NumLugares">NumLugares</label>
						<input type="text" class="form-control" id="NumLugares" name="NumLugares" required>
					</div>
					
					<div class="form-group">
						<label for="PrimeiroRegisto">PrimeiroRegisto</label>
						<input type="text" class="form-control" id="PrimeiroRegisto" name="PrimeiroRegisto" required>
					</div>
					
					<div class="form-group">
						<label for="Cor">Cor</label>
						<input type="text" class="form-control" id="Cor" name="Cor" required>
					</div>
					
					<div class="form-group">
						<label for="NumPortas">NumPortas</label>
						<input type="text" class="form-control" id="NumPortas" name="NumPortas" required>
					</div>
					
					<div class="form-group">
						<label for="Tipo">Tipo</label>
						<input type="text" class="form-control" id="Tipo" name="Tipo" required>
					</div>
					
					<div class="form-group">
						<label for="Potencia">Potencia</label>
						<input type="text" class="form-control" id="Potencia" name="Potencia" required>
					</div>
					
					<div class="form-group">
						<label for="Combustivel">Combustivel</label>
						<input type="text" class="form-control" id="Combustivel" name="Combustivel" required>
					</div>
					
					<div class="form-group">
						<label for="Quilometros">Quilometros</label>
						<input type="text" class="form-control" id="Quilometros" name="Quilometros" required>
					</div>
					
					<div class="form-group">
						<label for="Cilindrada">Cilindrada</label>
						<input type="text" class="form-control" id="Cilindrada" name="Cilindrada" required>
					</div>
					

					<div class="form-group">
						<label for="Preco">Preco</label>
						<input type="text" class="form-control" id="Preco" name="Preco" required>
					</div>
					
					<div class="form-group">
						<label for="ID_Loja">Loja</label>
						<input type="text" class="form-control" id="ID_Loja" name="ID_Loja" required>
					</div>
					
					<div class="form-group">
						<label for="ID_Marca">Marca</label>
						<input type="text" class="form-control" id="Marca" name="Marca" required>
					</div>
					
					<div class="form-group">
						<label for="NIF">NIF do Cliente</label>
						<input type="text" class="form-control" id="NIF" name="NIF" required>
					</div>
					
					<div class="form-group">
						<label for="Nome">Nome do Cliente</label>
						<input type="text" class="form-control" id="Nome" name="Nome" required>
					</div>
					
					<div class="form-group">
						<label for="Email">Email do Cliente</label>
						<input type="text" class="form-control" id="Email" name="Email" required>
					</div>
					
					<div class="form-group">
						<label for="Telefone">Telefone do Cliente</label>
						<input type="text" class="form-control" id="Telefone" name="Telefone" required>
					</div>
					
					<div class="form-group">
						<label for="Morada">Morada do Cliente</label>
						<input type="text" class="form-control" id="Morada" name="Morada" required>
					</div>
					
					<button type="submit" class="btn btn-default">Comprar</button>
				</form>  
			</div>

			<div class="col-sm-4">
				</div>
		</div>		
		ss
		
	</body>
</html>