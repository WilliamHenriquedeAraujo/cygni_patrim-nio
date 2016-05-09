<html>
<?php

	//CRIAR SESSÃO PARA QUE SEJA POSSÍVEL PEGAR O NOME DO USUÁRIO PARA INSERIR NA TABELA MBP
	$numero_bem=$_POST["numero_bem"];
	$sala_antiga=$_POST["sala_antiga"];
	$sala_nova=$_POST["sala_nova"];


	$conexao="host=192.168.42.110 dbname=patrimonio port=5432 user=postgres password=amoteeu";
	$status_conexao=pg_connect($conexao);
	$sql_verificacao_permissao_movimentacao=
	$sql_modificando_tabela_bempatrimonial="UPDATE bempatrimonial SET numsala=".$sala_nova." where numero_bem = ".$numero_bem." AND numsala = ".$sala_antiga.";";
	$sql_inserindo_mbp="INSERT INTO mbp (data_, login, numBem, numSalaOrigem, numSalaDestino) VALUES (current_date, 'william',".$numero_bem.",".$sala_antiga.", ".$sala_nova.");";

		if(!$status_conexao){
				echo "Erro na conex&atilde;o com o banco de dados";

		}else{

			pg_query($status_conexao, $sql_modificando_tabela_bempatrimonial);
			pg_query($status_conexao, $sql_inserindo_mbp);
			pg_close();
			echo "<h3>Movimenta&ccedil;o de bem patrim&ocirc;nial realizado com sucesso!<h3><br>";
			//echo "Deseja fazer outra movimenta&ccedil;&atilde;o ?<br>";
			//echo "SIM<a href='movimentacao_bem.html'></a><br> N&Atilde;O<a href='index.html'></a>";
		}







?>

<head> <title>Movimentacao</title></head>

<body>
Deseja fazer outra movimenta&ccedil;&atilde;o ?<br>
<a href='movimentacao_bem.html'>SIM</a><br> 
<a href='index.html'>N&Atilde;O</a><br>
</body>
</html>	