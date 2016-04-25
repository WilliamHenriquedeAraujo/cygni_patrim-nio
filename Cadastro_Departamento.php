<?php

$SiglaDepa=$_POST['sigla'];
$NomeDepa=$_POST['nome'];
$ResponsavelDepa=$_POST['responsavel'];



$servidor = "host=localhost port=5432 dbname=academico user=postgres password=123456";
$usuario = "postgres";
$senha = "123456";



$conexao = pg_connect($servidor) or die ("Não foi possivel conectar ao servidor PostGreSQL");
//$ordenacao=$_POST['ordenacao'];
//falta configurar as ordenações





$result = pg_query($conexao, "INSERT INTO Departamento VALUES ('".$SiglaDepa."', '".$NomeDepa."',
	'".$ResponsavelDepa."')");
?>