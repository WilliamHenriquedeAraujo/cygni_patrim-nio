<?php

	$numero_bem=$_POST["numero"];
	$descricao=$_POST["descricao"];
	$numero_nota=$_POST["nota_fiscal"];
	$data_nota=$_POST["data_nota"];
	$fornecedor=$_POST["fornecedor"];
	$sala_localizacao=$_POST["localizacao_bem"];
	$categoria=$_POST["categoria"];
	$valor_bem=$_POST["valor"];
	$sit=$_POST["situacao"];


	//Pegando o que foi passado para a variável sit e transformando em apenas
	//um carácter para escrever no banco de dados.
	if($sit == "uso"){
		$situacao = "U";
	}
	if($sit == "manutencao"){
		$situacao = "M";
	}
	if($sit == "inutilizado"){
		$situacao = "I";
	}


	/*
	*	STRING DE CONEXÃO COM O BANCO DE DADOS E STATUS DA CONEXÃO
	*	SE O IP DA MÁQUINA LINUX MUDAR É NECESSÁRIO MUDAR TAMBÉM A STRING DE CONEXÃO
	*/	
	$conexao=" host=localhost dbname=patrimonio port=5432 user=postgres password=root";
	$status_conexao=pg_connect($conexao);

	if(!$status_conexao){
		echo "Erro na conexao com o banco de dados...";
	}else{

			$sql_insercao="INSERT INTO BemPatrimonial VALUES (".$numero_bem.", '".$descricao."', ".$numero_nota.", '".$data_nota."', '".$fornecedor."', ".$valor_bem.", '".$situacao."', ".$categoria.", ".$sala_localizacao." );";
			pg_query($status_conexao, $sql_insercao);
			echo "<strong>A gravacao dos dados foi realizada com sucesso!<strong><br>";
	}











	//echo "Dados:<br><br>

	//Numero: ".$numero_bem."<br>
	//Descricao: ".$descricao."<br>
	//Numero da nota: ".$numero_nota."<br>
	//Data da nota: ".$data_nota."<br>
	//Fornecedor: ".$fornecedor."<br>
	//Localizacao do bem: ".$sala_localizacao."<br>
	//Categoria: ".$categoria."<br>
	//Valor: ".$valor_bem."<br>
	//Situacao: ".$situacao."<br>"
?>