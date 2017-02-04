<?php
        $MarcaCarro = $_POST["Marca"];
		if($_POST["Modelo"]!=NULL)
        	$ModeloCarro = $_POST["Modelo"];
		else
			$ModeloCarro = "%";
		if($_POST["Tipo"]!=NULL)
        	$TipoCarro = $_POST["Tipo"];
		else
			$TipoCarro = "%";
		if($_POST["Combustivel"]!=NULL)
        	$Combustivel = $_POST["Combustivel"];
		else
			$Combustivel = "%";
		$username = "2012145811";
		$password = "2012145811";
		$basedados = "bd_2012145811";
		$servidor = "delta.deec.uc.pt";


	//	$ligacao=mysqli_connect($servidor,$username,$password);
	//	@mysql_select_db($ligacao,$basedados) or die( "Não foi possível obter a ligação à Base de Dados");
	
		$ligacao=mysqli_connect($servidor,$username,$password,$basedados);
		if (mysqli_connect_errno())
			{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

		$SQL="SELECT * FROM Carro WHERE ID_Marca = '$MarcaCarro' AND Modelo LIKE '$ModeloCarro' AND Tipo LIKE '$TipoCarro' AND Combustivel LIKE '$Combustivel' AND Vendido=FALSE" ;

		if ($resultado=mysqli_query($ligacao,$SQL))
		{
			$num=mysqli_num_rows($resultado);
			$i = 0;
			while($tuplo = mysqli_fetch_array($resultado)) {
				$Matricula[$i] 			= $tuplo["Matricula"];
				$Modelo[$i] 			= $tuplo["Modelo"];
				$NumLugares[$i] 		= $tuplo["NumLugares"];
				$PrimeiroRegisto[$i] 	= $tuplo["PrimeiroRegisto"];
				$Cor[$i]				= $tuplo["Cor"];
				$NumPortas[$i] 			= $tuplo["NumPortas"];
				$Tipo[$i]				= $tuplo["Tipo"];
				$Potencia[$i] 			= $tuplo["Potencia"];
				$CombustiveI[$i] 		= $tuplo["Combustivel"];
				$Quilometros[$i]		= $tuplo["Quilometros"];
				$Cilindrada[$i] 		= $tuplo["Cilindrada"];
				$Preco[$i] 				= $tuplo["Preco"];
				$Vendido[$i]			= $tuplo["Vendido"];
				$ID_Loja[$i] 			= $tuplo["ID_Loja"];
				$ID_Marca[$i] 			= $tuplo["ID_Marca"];
				$i=$i+1;
			}
		}
		else {
			echo "ardeu<br />";
		}
		mysqli_close($ligacao);
		//echo "$MarcaCarro $ModeloCarro $NLugaresCarro $CombustivelCarro";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Resultado</title>

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
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Matricula</th>
        <th>Modelo</th>
		<th>Tipo</th>
        <th>NumerodeLugares</th>
		<th>Combustivel</th>
		<th>Quilómetros</th>
		<th>1ºRegisto</th>
		<th>Preço</th>
		<th>Loja</th>
      </tr>
    </thead>
    <tbody>
		<?php
		$j=0;
		while($j<$i){
			echo '
			<tr>
				<td> ' .$Matricula[$j]. ' </td>
				<td> ' .$Modelo[$j]. ' </td>
				<td> ' .$Tipo[$j]. ' </td>
				<td> ' .$NumLugares[$j]. ' </td>
				<td> ' .$CombustiveI[$j]. ' </td>
				<td> ' .$Quilometros[$j]. ' </td>
				<td> ' .$PrimeiroRegisto[$j]. ' </td>
				<td> ' .$Preco[$j]. ' </td>
				<td> ' .$ID_Loja[$j]. ' </td>
      		</tr>';
			$j++;
		}
	  	?>
    </tbody>
  </table>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>