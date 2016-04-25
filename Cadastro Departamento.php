<?php

$SiglaDepa=$_POST['matricula'];
$NomeDepa=$_POST['nome'];
$ResponsavelDepa=$_POST['dtnasc'];
$SalaDepa=$_POST['sexo'];


$servidor = "host=localhost port=5432 dbname=academico user=postgres password=123456";
$usuario = "postgres";
$senha = "123456";



$conexao = pg_connect($servidor) or die ("Não foi possivel conectar ao servidor PostGreSQL");
//$ordenacao=$_POST['ordenacao'];
//falta configurar as ordenações


echo "<h1>Lista de Alunos</h1>";



$result = pg_query($conexao, "INSERT INTO Cadastro Departamento VALUES ('".$SiglaDepa."', '".$NomeDepa."',
	'".$ResponsavelDepa."','".$SalaDepa."')");
?>