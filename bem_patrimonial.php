<html>

	<body>
	
	<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cygni Patrimônio</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body> 

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 
 
 <nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php">Cygni Patrimônio</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">Início</a></li>
	<li><a href="relatorio.php">Emitir Relatórios</a></li>
     <li><a href="CdUsuario_tela.php">Cadastrar usuário</a></li>
	 <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
 
   </ul>
  </div>
 </div>
</nav>

<?php

	
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


	//Pegando o que contém na sala de localização do bem e passando para integer
	if($sala_localizacao == "ADM"){
		$id_localizacao = 1;
	}
	if($sala_localizacao == "FIN"){
		$id_localizacao = 2;
	}
	if($sala_localizacao == "TI"){
		$id_localizacao = 3;
	}
	if($sala_localizacao == "DIR"){
		$id_localizacao = 4;
	}

    //Pegando o que contém na categoria e passando para integer 
	if($categoria == "Moveis"){
		$id_categoria = 1;
	}
	if($categoria == "Eletro Eletronicos"){
		$id_categoria = 2;
	}
	if($categoria == "Materiais de escritorio"){
		$id_categoria = 3;
	}
	if($categoria == "Carros automotores"){
		$id_categoria = 4;
	}
	if($categoria == "Motos"){
		$id_categoria = 5;
	}

	/*
	*	STRING DE CONEXÃO COM O BANCO DE DADOS E STATUS DA CONEXÃO
	*	SE O IP DA MÁQUINA LINUX MUDAR É NECESSÁRIO MUDAR TAMBÉM A STRING DE CONEXÃO
	*/	
	$conexao=" host=127.0.0.1 dbname=cygni port=5432 user=postgres password=root";
	$status_conexao=pg_connect($conexao);

	if(!$status_conexao){
		echo "Erro na conexao com o banco de dados...";
	}else{

			$sql_insercao="INSERT INTO BemPatrimonial (descricao, nrnotafiscal, dtnotafiscal, fornecedor, valor, situacao, codcat, numsala) VALUES ('".$descricao."', ".$numero_nota.", '".$data_nota."', '".$fornecedor."', ".$valor_bem.", '".$situacao."', ".$id_categoria.", ".$id_localizacao." );";
			pg_query($status_conexao, $sql_insercao);
			echo "<br><strong>A gravacao dos dados foi realizada com sucesso!<strong><br>";
	}
			pg_close($status_conexao);
		
?>
</br>
        
      <a href="index.php" class="btn btn-danger">Voltar</a>
    
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
</body>
</html>