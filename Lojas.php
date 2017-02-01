<?php
        $username = "2012145811";
		$password = "2012145811";
		$basedados = "bd_2012145811";
		$servidor = "delta.deec.uc.pt";


        $ligacao=mysqli_connect($servidor,$username,$password,$basedados);
		if (mysqli_connect_errno())
			{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}




$SQL="SELECT * FROM Loja" ;


if ($resultado=mysqli_query($ligacao,$SQL))
		{
			$num=mysqli_num_rows($resultado);
			$i = 0;
			while($tuplo = mysqli_fetch_array($resultado)) {
				$ID_Loja[$i] 				= $tuplo["ID_Loja"];
				$Morada[$i] 				= $tuplo["Morada"];
				$NumTelefone[$i] 			= $tuplo["NumTelefone"];
				$i=$i+1;
			}
		}
		else {
			echo "ardeu<br />";
		}
		
		mysqli_close($ligacao);
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
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nome da Loja</th>
							<th>Morada</th>
							<th>Nº Telefone</th>
						</tr>
					</thead>
					<tbody>
				<?php
						$j=0;
						while($j<$i){
						echo '
						<tr>
							<td> ' .$ID_Loja[$j]. ' </td>
							<td> ' .$Morada[$j] . ' </td>
							<td> ' .$NumTelefone[$j]. ' </td>
						</tr>';
						$j++;
						}
				?>
					</tbody>
				</table>

 
      <li>© 2017 <span title="">Stand Rodas & Motores José Lourenço & João Marques</span>, Inc.</li>
    </ul>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>