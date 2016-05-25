
<html>
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
	$conexao=" host=localhost dbname=cygni port=5432 user=postgres password=root";
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
   <a class="navbar-brand" href="index.html">Cygni Patrimônio</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="index.html">Início</a></li>
	<li><a href="relatorio.html">Emitir Relatórios</a></li>
     <li><a href="CdUsuario.html">Cadastrar usuário</a></li>
	 <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
 
   </ul>
  </div>
 </div>
</nav>
</br>
</br>
<a href="index.html" class="btn btn-default">Voltar</a>

</html> 



