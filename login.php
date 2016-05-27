<?php

	$login=$_POST["login"];
	$senha=$_POST["password"];


	$conexao=" host=10.0.0.117 dbname=cygni port=5432 user=postgres password=root";
	$status_conexao=pg_connect($conexao);


	//CONSULTA QUE RETORNARÁ APENAS O NOME! 
	$consulta="select login from usuario where lower(login) like lower('".$login."%');";
	pg_query($status_conexao, $consulta);
	$result_consulta=pg_query($status_conexao, $consulta);

	//login_recolhido_banco é um vetor, sua primeira posição é o nome do usuário consultado no banco
	$login_recolhido_banco=pg_fetch_row($result_consulta);


	//CONSULTA QUE RETORNARÁ APENAS A SENHA DO USUÁRIO!	
	$consulta2="select senha from usuario where lower(senha) like lower('".$senha."');";
	pg_query($status_conexao, $consulta2);
	$result_consulta2=pg_query($status_conexao, $consulta2);
	$senha_recolhida_banco=pg_fetch_row($result_consulta2);


	//CONSULTA QUE RETORNARÁ APENAS O NÍVEL DO USUÁRIO!
	$consulta3="select nivel from usuario where lower(login) like lower('".$login."');";
	pg_query($status_conexao, $consulta3);
	$result_consulta3=pg_query($status_conexao, $consulta3);
	$nivel_recolhido_banco=pg_fetch_row($result_consulta3);

	//MODIFICANDO O VALOR DA VARIÁVEL $nivel_recolhido_banco ----> Se a variável é igual a g, $nivel=Gerente, Se a variável é igual a f, $nivel=Funcionário 

	if($nivel_recolhido_banco[0] == "g"){
		$nivel = "gerente";
	}elseif($nivel_recolhido_banco[0] == "f"){
		$nivel = "funcionario";
	}

	

	

	if(empty($login_recolhido_banco[0]) || empty($senha_recolhida_banco[0])){
		header("location: pagina_erro.html");
	}else{
		session_start();
		$_SESSION['nome_usuario']=$login;
		$_SESSION['nivel_usuario']=$nivel;
		header("location: index.php");
	}

	pg_close($status_conexao);

?>