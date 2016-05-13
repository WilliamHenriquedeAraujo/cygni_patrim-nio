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
	
	
		
	

<form name="frmrelatorio" id="frmrelatorio"action="mostrar.php" method="POST" 
 </br>
  		</br>
  		</br>
		<h1>Cadastrar Salas</h1>
		</br>

		
		<?php

 			$strBd = "host=localhost port=5432 dbname=patrimonio user=postgres password=root";
			 $conexao = pg_connect($strBd);
			if (!$conexao){
				echo "Não foi possível estabelecer uma conexão com o Banco.";
			}else{
				
				echo "<table class=table table-bordered>";
				echo "<tr><th>Numero</th><th>Nome</th><th>Endereço</th></tr>";
				$result = pg_query ($conexao , "select * from predio");
				while ($row=pg_fetch_row($result)) {
				  echo "<tr>";
				  echo "<td>".$row[0]."</td>";
				  echo "<td>".$row[1]."</td>";
				  echo "<td>".$row[2]."</td>";
			
				  
				  echo "</tr>";
				}
			
				echo "</table>";
					pg_close($conexao);
			}
		
		
  ?>
		
		
	   </br>	

	</body>
  <a href="index.html" class="btn btn-primary">  Voltar  </a>
</html> 