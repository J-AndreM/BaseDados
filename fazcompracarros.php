<?php

$username = "2012145811";
$password = "2012145811";
$basedados = "bd_2012145811";
$servidor = "delta.deec.uc.pt";


$matricula = $_POST["Matricula"];
$preco = $_POST["Preco"];
$NIF_Client = $_POST["NIF"];


$ligacao=mysqli_connect($servidor,$username,$password,$basedados) or die( "Não foi possível seleccionar a BD");

$SQL = "SELECT * from Cliente where NIF = $NIF_Client";

if ($resultado=mysqli_query($ligacao,$SQL))
{
    if(mysqli_num_rows($resultado) == 0)
    {
        $SQL = "insert into Cliente (NIF) values($NIF_Client)";
        $resultado2 = mysqli_query($ligacao,$SQL);
    }
}

$SQL = "insert into CompraCarro values($matricula,$NIF_Client,CURDATE(),$preco)";
$resultado2 = mysqli_query($ligacao,$SQL);
mysqli_close($ligacao);
?>