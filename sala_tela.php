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
    <?php 

      session_start();
      echo "<strong>".$_SESSION['nivel_usuario']." ".$_SESSION['nome_usuario']."</strong>";
    ?>   
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
	
	
		
			<h1>Cadastrar Salas</h1>
		</br>

<form name="frmsala" id="frmsala"action="sala.php" method="POST" 
  <!-- area de campos do form -->
  

 
 
 <div class="form-group col-md-4">
   <label for="_sala">Sala</label>
   
   <select name="localizacao_sala" class="form-control" id="campo1">
      <option>Selecione</option>

<!-- CÓDIGO EM PHP PARA BUSCAR AS CATEGORIAS CONTIDAS NO BANCO DE DADOS -->
<?php
  

  
  $conexao=" host=127.0.0.1 dbname=cygni port=5432 user=postgres password=root";
  $status_conexao=pg_connect($conexao);

  if(!$status_conexao){
    echo "Erro na conexao com o banco de dados...";
  }else{
    $sql_sigla_sala="SELECT _sala FROM sala;";
    $resultado=pg_query($status_conexao, $sql_sigla_sala);
    $qtd_linhas=pg_num_rows($resultado);

      for($i=0; $i < $qtd_linhas; $i++){
          $num_sala=pg_fetch_row($resultado);
          echo "<option>".$num_sala[0]."</option>";
          
      }
  }
?>
<!--VOLTANDO PARA A CODIFICAÇÃO HTML -->
</select><br>  
 </div>
 </div>
 
 <div class="form-group col-md-4">
   <label for="comprimento">Comprimento</label>
   <input type="number" class="form-control" id="comprimento" name="comprimento"required>
 </div>
 
 <div class="form-group col-md-4">
   <label for="largura">Largura</label>
   <input type="number" class="form-control" id="largura" name="largura"required>
 </div>
</div>
 
 <div class="form-group col-md-4">
   <label for="codPredio">Código do Prédio</label>
  
      <select name="localizacao_predio" class="form-control" id="campo4">
      <option>Selecione</option>

<!-- CÓDIGO EM PHP PARA BUSCAR AS CATEGORIAS CONTIDAS NO BANCO DE DADOS -->
<?php
  

  
  $conexao=" host=127.0.0.1 dbname=cygni port=5432 user=postgres password=root";
  $status_conexao=pg_connect($conexao);

  if(!$status_conexao){
    echo "Erro na conexao com o banco de dados...";
  }else{
    $sql_sigla_sala="SELECT codpredio FROM sala;";
    $resultado=pg_query($status_conexao, $sql_sigla_sala);
    $qtd_linhas=pg_num_rows($resultado);

      for($i=0; $i < $qtd_linhas; $i++){
          $cod_predio=pg_fetch_row($resultado);
          echo "<option>".$cod_predio[0]."</option>";
          
      }
  }
?>
<!--VOLTANDO PARA A CODIFICAÇÃO HTML -->
</select><br>  
 </div>
 </div>
</div>
 
 <div class="form-group col-md-4">
   <label for="siglaDpto">Sigla Departamento</label>
   <input type="text" class="form-control" id="siglaDpto" name="siglaDpto"required>
 </div>
</div>
 

<hr />

 <div class="col-md-12">
  </br>
  
   <a href="sala.php" class="btn btn-default">Cadastrar</a>

   </br>
   </br>
   
  
   </br>
    <a href="index.php" class="btn btn-primary">  Voltar  </a>
	</br>
 </div>
</div>


 

			
		</form>
		
		
		
		
		

	</body>

</html> 