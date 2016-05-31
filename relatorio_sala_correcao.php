<!DOCTYPE html>

<?php 

  session_start();
  echo "<strong>".$_SESSION['nivel_usuario']." ".$_SESSION['nome_usuario']."</strong>";
?>   
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cygni MBP</title>

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

<div class="conteudo" style="">
 <h3 class="page-header">Escolha qual a sala que voc&ecirc; deseja obter a lista dos bens patrim&ocirc;niais.</h3>
</div>


<form name="sala" id="sala" action="relatorio_sala.php" method="POST" >

 
 <div class="form-group col-md-4">
   <label for="numero_sala">N&uacute;mero da sala</label>
   <select class="form-control" name="sala_do_bem">
    <option>01</option>
    <option>02</option>
    <option>03</option>
    
    </select><br> 
</div>

 
 
    <div class="col-md-12">
      <input type="submit" class="btn btn-primary" value="Emitir relat&oacute;rio"> 
    </div>

</form>
</div>

</body>
</html>