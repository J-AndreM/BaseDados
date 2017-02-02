<?php
        $MarcaMota = $_POST["Marca"];
		if($_POST["Modelo"]!=NULL)
        	$ModeloMota = $_POST["Modelo"];
		else
			$ModeloMota = "%";
		
		$username = "2012145811";
		$password = "2012145811";
		$basedados = "bd_2012145811";
		$servidor = "delta.deec.uc.pt";
		
	
		$ligacao=mysqli_connect($servidor,$username,$password,$basedados);
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		
		$SQL="SELECT * FROM Mota WHERE ID_Marca = '$MarcaMota' AND Modelo LIKE '$ModeloMota'";
		
		if ($resultado=mysqli_query($ligacao,$SQL))
		{
			$num=mysqli_num_rows($resultado);
			$i = 0;
			while($tuplo = mysqli_fetch_array($resultado)) {
				$Modelo[$i] 			= $tuplo["Modelo"];
				$PrimeiroRegisto[$i] 	= $tuplo["PrimeiroRegisto"];
				$Cor[$i]				= $tuplo["Cor"];
				$Potencia[$i] 			= $tuplo["Potencia"];
				$CombustiveI[$i] 		= $tuplo["Combustivel"];
				$Quilometros[$i]		= $tuplo["Quilometros"];
				$Preco[$i] 				= $tuplo["Preco"];
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
        <th>Marca</th>
        <th>Modelo</th>
		<th>1ºRegisto</th>
        <th>Cor</th>
		<th>Potência</th>
		<th>Quilómetros</th>
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
				<td> ' .$ID_Marca[$j] . ' </td>
				<td> ' .$Modelo[$j]. ' </td>
				<td> ' .$PrimeiroRegisto[$j]. ' </td>
				<td> ' .$Cor[$j]. ' </td>
				<td> ' .$Potencia[$j]. ' </td>
				<td> ' .$Quilometros[$j]. ' </td>
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
		