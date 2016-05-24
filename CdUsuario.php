<?php

$login=$_POST['login'];

$nome=$_POST['nome'];

$senha=$_POST['senha'];

$nivel=$_POST['nivel'];




$conexao=" host=localhost dbname=cygni port=5432 user=postgres password=123456";

$status_conexao=pg_connect($conexao);


if(!$status_conexao){
	
	echo "Erro na conexao com o banco de dados...";
	
}
else{
	
	
	$sql_insercao="INSERT INTO usuario (login,nome,senha,nivel) VALUES ('".$login."', '".$nome."', '".$senha."', '".$nivel."');";
	
	pg_query($status_conexao, $sql_insercao);
	
	echo "<strong>A gravacao dos dados foi realizada com sucesso!<strong><br>";
	
}







?>