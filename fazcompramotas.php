<?php

$username = "2012145811";
$password = "2012145811";
$basedados = "bd_2012145811";
$servidor = "delta.deec.uc.pt";

// Dados de Motas
$matricula = $_POST["Matricula"];
$Modelo = $_POST["Modelo"];
$PrimeiroRegisto = $_POST["PrimeiroRegisto"];
$Cor = $_POST["Cor"];
$Potencia = $_POST["Potencia"];
$Combustivel = $_POST["Combustivel"];
$Quilometros = $_POST["Quilometros"];
$ID_Loja = $_POST["ID_Loja"];
$Marca = $_POST["Marca"];
$preco = $_POST["Preco"];

// dados do cliente
$NIF_Client = $_POST["NIF"];
$Nome_Cliente= $_POST["Nome"];
$Email_Cliente= $_POST["Email"];
$Telefone_Cliente=$_POST["Telefone"];
$Morada_Cliente=$_POST["Morada"];


$ligacao=mysqli_connect($servidor,$username,$password,$basedados) or die( "Não foi possível seleccionar a BD");

$SQL = "SELECT * from Cliente where NIF = $NIF_Client";
if ($resultado=mysqli_query($ligacao,$SQL))
{
    if(mysqli_num_rows($resultado) == 0)
    {
        $SQL = "insert into Cliente values($NIF_Client,'$Nome_Cliente','$Email_Cliente',$Telefone_Cliente,'$Morada_Cliente')";
        if(!($resultado1 = mysqli_query($ligacao,$SQL)))
            echo "$resultado1: query falhou<br />";
    }
	else die("cliente ja existe.");
}

$SQL = "SELECT * from Mota where Matricula = '$matricula'";
if ($resultado=mysqli_query($ligacao,$SQL))
{
    if(mysqli_num_rows($resultado) == 0)
    {
		$SQL = "insert into Mota values('$matricula','$Modelo',$PrimeiroRegisto,'$Cor',$Potencia,'$Combustivel',$Quilometros,$preco,false,'$ID_Loja','$Marca')";
		 if(!($resultado2 = mysqli_query($ligacao,$SQL)))
            echo "$resultado2: query falhou<br />";
		
		
	}
	else die("matricula ja existe.");
}

$SQL = "SELECT * from CompraMotawhere Matricula = '$matricula'";
if ($resultado=mysqli_query($ligacao,$SQL))
{
    if(mysqli_num_rows($resultado) == 0)
    {
		 $SQL = "insert into CompraMota values('$matricula',$NIF_Client,CURDATE(),$preco)";
		 if(!($resultado3 = mysqli_query($ligacao,$SQL)))
            echo "$resultado3: query falhou<br />";
		
		
	}
}

mysqli_close($ligacao);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
   <div class="container">
		<div class="jumbotron text-center">
			<h1>Mota Adicionada</h1>
			<p> <a href="Login.php">Login</a></p>
		</div>
	</div>	
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>