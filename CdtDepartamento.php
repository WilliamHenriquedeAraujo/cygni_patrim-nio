
<html>



<?php
         $conexao = "host=localhost port=5432 dbname=cygni user=postgres password=root";
		 $status_conexao = pg_connect($conexao);
		 
		if (!$status_conexao){
			echo "Erro na conexao com o banco de dados...";
		}else{
			$sigla=$_POST["sigla"];
			$nome=$_POST["nome"];
			$responsavel=$_POST["responsavel"];
			
			$sql = "INSERT INTO departamento VALUES ('".$sigla."', '".$nome."','".$responsavel."');";  
			pg_query($status_conexao, $sql);
			
			echo "Cadastro realizado com sucesso!";
		}
		
		pg_close($status_conexao);	
			
			
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
</br>
</br>
<a href="index.php" class="btn btn-default">Voltar</a>

</html> 

