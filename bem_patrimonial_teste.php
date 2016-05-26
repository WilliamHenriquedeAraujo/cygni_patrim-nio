<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cadastro de bem patrim&ocirc;nial</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body> 

	
<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.html">Cygni Patrim&ocirc;nio</a>
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



<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
 
</html>




<div id="main" class="container-fluid">
 <h3 class="page-header">Adicionar bem patrim&ocirc;nial</h3>
</div>

<form action="bem_patrimonial.php" method="post" name="bem_patrimonial">
  <!-- area de campos do form -->
    <div class="row">
<div class="form-group col-md-4">
   <label for="campo2">Descri&ccedil;&atilde;o do bem</label>
   <!--<input type="text" class="form-control" id="campo3">-->
   <textarea name="descricao" class="form-control" id="campo2" rows="10" cols="30">Escreva aqui!
    </textarea>

 </div>
 
 <div class="form-group col-md-4">
   <label for="campo3">Nota Fiscal</label>
   <input type="number" class="form-control" id="campo3" name="nota_fiscal" value="00000">
 </div>



<div class="form-group col-md-4">
   <label for="campo4">Data da Nota</label>
   <input type="date" class="form-control" id="campo4" name="data_nota">
 </div>

<div class="form-group col-md-4">
   <label for="campo5">Fornecedor</label>
   <input type="text" class="form-control" id="campo5" name="fornecedor">
 </div>


<div class="form-group col-md-4">
   <label for="campo6">Sala de localiza&ccedil;&atilde;o do bem</label>
   <select name="localizacao_bem" class="form-control" id="campo6">
      <option>Selecione</option>

<!-- CÓDIGO EM PHP PARA BUSCAR AS CATEGORIAS CONTIDAS NO BANCO DE DADOS -->
<?php
  

  
  $conexao=" host=localhost dbname=cygni port=5432 user=postgres password=root";
  $status_conexao=pg_connect($conexao);

  if(!$status_conexao){
    echo "Erro na conexao com o banco de dados...";
  }else{
    $sql_sigla_sala="SELECT sigladpto FROM sala;";
    $resultado=pg_query($status_conexao, $sql_sigla_sala);
    $qtd_linhas=pg_num_rows($resultado);

      for($i=0; $i < $qtd_linhas; $i++){
          $sigla_depto=pg_fetch_row($resultado);
          echo "<option>".$sigla_depto[0]."</option>";
          
      }
  }
?>
<!--VOLTANDO PARA A CODIFICAÇÃO HTML -->
</select><br>  
 </div>

 <div class="form-group col-md-4">
   <label for="campo7">Categoria</label>
   <select name="categoria" class="form-control" id="campo7">
      <option>Selecione</option>
 <!-- CÓDIGO EM PHP PARA BUSCAR AS CATEGORIAS CONTIDAS NO BANCO DE DADOS -->   
<?php
  
  $conexao=" host=localhost dbname=cygni port=5432 user=postgres password=root";
  $status_conexao=pg_connect($conexao);

  if(!$status_conexao){
    echo "Erro na conexao com o banco de dados...";
  }else{
    $sql_nome_categoria="SELECT nome FROM categoria;";
    $resultado=pg_query($status_conexao, $sql_nome_categoria);
    $qtd_linhas=pg_num_rows($resultado);

      for($i=0; $i < $qtd_linhas; $i++){
          $categoria=pg_fetch_row($resultado);
          echo "<option>".$categoria[0]."</option>";
          
      }
  }
?>
<!--VOLTANDO PARA A CODIFICAÇÃO HTML --> 
    </select><br>     
 </div>

  <div class="form-group col-md-4">
   <label for="campo8">Valor do bem</label>
   <input type="number" class="form-control" id="campo8" name="valor">
 </div>  


<div class="form-group col-md-4">
   <label for="campo9">Situa&ccedil;&atilde;o do bem </label><br>
   <input type="radio" value="uso" id="campo9" name="situacao">Em uso<br>
   <input type="radio" value="manutencao" id="campo9" name="situacao">Em manuten&ccedil;&atilde;o<br>
   <input type="radio" value="inutilizado" id="campo9" name="situacao">Inutilizado<br>
   
 </div> 
</div>
  <hr />
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.html" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>


 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>