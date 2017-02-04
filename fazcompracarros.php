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
        $resultado2 = mysqli_query($ligacao,$SQL);
        echo $resultado2;
    }
}

$SQL = "insert into Carro values($matricula,$Modelo,$NumLugares,$PrimeiroRegisto,$Cor,$NumPortas,$Tipo,$Potencia,$Combustivel,$Quilometros,$Cilindrada,$preco,false,$ID_Loja,$Marca)";
$resultado2 = mysqli_query($ligacao,$SQL);
echo $resultado2;


$SQL = "insert into CompraCarro values($matricula,$NIF_Client,CURDATE(),$preco)";
$resultado2 = mysqli_query($ligacao,$SQL);
mysqli_close($ligacao);
echo $resultado2;
?>