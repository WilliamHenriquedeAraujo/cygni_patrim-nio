<html>
<header>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     
<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.html">Cygin Patrimônio</a>
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

<div id="main" class="container-fluid">
   <?php 

      session_start();
      echo "<strong>".$_SESSION['nivel_usuario']." ".$_SESSION['nome_usuario']."</strong>";
    ?> 
    <br>
    <br>
    <h1>Cadastro de Departamento </h1>
</header>
<body>
    <div class="container">
  <div class="jumbotron">
    <div class="row">
        <form name="frm" id="frm" action="CdtDepartamento.php" method="POST">
            
            <br>   Sigla do Departamento <input type="text" name="sigla" value="" required= "y" size="1" maxlength="13" /> <br>
            <br>   Nome do Departamento <input type="text" name="nome" value="" size= "30"  required= "y" size="30" maxlength="20"/><br>
            <br> Responsavel do Departamento <input type="text" name="responsavel" value="" size= "30" required= "y" size="30" maxlength="13"/> <br>
            <hr />
                <div id="actions" class="row">
                <div class="col-md-12">
                
                
             </div>
             </div>
            <br><input type="submit" name="inserir" id="btninserir"  class="btn btn-primary" value="Inserir" />  <a href="index.php" class="btn btn-default">Cancelar</a>

        </form>
    </div>
  </div>
</div>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
</body>
</html>