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
	 <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
 
   </ul>
  </div>
 </div>
</nav>



<form name="relatorio_bem_por_sala" id="relatorio_bem_por_sala"action="mostra.php" method="POST" 
 </br>
  		</br>
  		</br>
		
		


<?php

 	
	$numsala=$_POST["sala_do_bem"];
	$conexao=" host=192.168.46.162 dbname=cygni port=5432 user=postgres password=root";
	$status_conexao=pg_connect($conexao);


		echo "<h1>Relatório de bens patrim&ocirc;niais da sala ".$numsala."</h1>";
		echo "</br>";

	

	if(!$status_conexao){
		echo "Erro na conexao com o banco de dados...";
	}else{
			$sql="select numero_bem, descricao, nrnotafiscal, dtnotafiscal, fornecedor, valor, situacao, codcat, numsala from bempatrimonial b, sala s where b.numsala = s.numero_sala and numero_sala = ".$numsala." order by numero_bem;";
			pg_query($status_conexao, $sql);
			$resultado_consulta = pg_query($status_conexao, $sql);
			$qtd_linhas = pg_num_rows($resultado_consulta);
			
			echo "<center>";
			echo "<TABLE class=table table-responsive>
				  <TR>
				  <TD><center><strong>NUMERO DO PATRIMONIO</center></strong></TD>
				  <TD><center><strong>DESCRICAO</center></strong></TD>
				  <TD><center><strong>NUMERO DA NOTA</center></strong></TD>
				  <TD><center><strong>DATA DA NOTA</center></strong></TD>
				  <TD><center><strong>FORNECEDOR</center></strong></TD>
				  <TD><center><strong>VALOR</center></strong></TD>
				  <TD><center><strong>SITUACAO</center></strong></TD>
				  <TD><center><strong>CATEGORIA</center></strong></TD>
				  <TD><center><strong>SALA</center></strong></TD></TR>";

			for($i = 0; $i < $qtd_linhas; $i++){
				$conteudo_linha = pg_fetch_row($resultado_consulta);
									echo "<TR><TD><center>".$conteudo_linha[0]."</center></TD>";
									echo "<TD><center>".$conteudo_linha[1]. "</center></TD>";
									echo "<TD><center>".$conteudo_linha[2]. "</center></TD>";
									echo "<TD><center>".$conteudo_linha[3]. "</center></TD>";
									echo "<TD><center>".$conteudo_linha[4]. "</center></TD>";
									echo "<TD><center>".$conteudo_linha[5]. "</center></TD>";
									echo "<TD><center>".$conteudo_linha[6]. "</center></TD>";
									echo "<TD><center>".$conteudo_linha[7]. "</center></TD>";
									echo "<TD><center>".$conteudo_linha[8]. "</center></TD></TR>";
									

			}
									echo "</table>";
			pg_close($status_conexao);
	}		

?>
