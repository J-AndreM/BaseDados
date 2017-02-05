<?php

$username = "2012145811";
$password = "2012145811";
$basedados = "bd_2012145811";
$servidor = "delta.deec.uc.pt";

// dados do carro
$matricula = $_POST["Matricula"];
$Modelo = $_POST["Modelo"];
$NumLugares = $_POST["NumLugares"];
$PrimeiroRegisto = $_POST["PrimeiroRegisto"];
$Cor = $_POST["Cor"];
$NumPortas = $_POST["NumPortas"];
$Tipo = $_POST["Tipo"];
$Potencia = $_POST["Potencia"];
$Combustivel = $_POST["Combustivel"];
$Quilometros = $_POST["Quilometros"];
$Cilindrada = $_POST["Cilindrada"];
$ID_Loja = $_POST["ID_Loja"];
$Marca = $_POST["Marca"];
$preco = $_POST["Preco"];

// dados do cliente
$NIF_Client = $_POST["NIF"];


$ligacao=mysqli_connect($servidor,$username,$password,$basedados) or die( "Não foi possível seleccionar a BD");

$SQL = "SELECT * from Cliente where NIF = $NIF_Client";

if ($resultado=mysqli_query($ligacao,$SQL))
{
    if(mysqli_num_rows($resultado) == 0)
    {
        $SQL = "insert into Cliente (NIF) values($NIF_Client)";
        if(!($resultado2 = mysqli_query($ligacao,$SQL)))
            echo "$resultado2: query falhou<br />";
    }
}

$SQL = "insert into Carro values('$matricula','$Modelo',$NumLugares,$PrimeiroRegisto,'$Cor',$NumPortas,'$Tipo',$Potencia,'$Combustivel',$Quilometros,$Cilindrada,$preco,false,'$ID_Loja','$Marca')";
if(!($resultado3 = mysqli_query($ligacao,$SQL)))
    echo "$resultado3: query falhou<br />";


$SQL = "insert into CompraCarro values('$matricula',$NIF_Client,CURDATE(),$preco)";
if(!($resultado4 = mysqli_query($ligacao,$SQL)))
    echo "$resultado4: query falhou<br />";

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
    <h1>Hello, world!</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>