<html>
<header>
    <?php 

  session_start();
    echo "<h3><strong> Ol&aacute; ".$_SESSION['nivel_usuario']." ".$_SESSION['nome_usuario'].", o que deseja fazer ?</h3></strong><br>";
    ?>   
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
   <a class="navbar-brand" href="index.html">Cygni Patrimônio</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
 
    <li><a href="relatorio.php">Emitir Relatórios</a></li>
    <li><a href="CdUsuario_tela.php">Cadastrar usuário</a></li>
	<a href="logout.php" class="btn btn-info btn-lg">
  <span class="glyphicon glyphicon-log-out"></span> Log out
          </a>
        </div>
        </div>
        </nav>



<div id="main" class="container-fluid">
    <br>
    <br>
    <h1>Home </h1>

   
</header>
<body>
    <div class="container">
  <div class="jumbotron">
    <div class="row">
       <div class="btn-group btn-group-justified" role="group" aria-label="...">
         <div class="btn-group" role="group">
            <button type="button" class="btn btn-default" 
            onclick ="javascript: window.location.href= 'bem_patrimonial_teste.php'">Cadastro de Bem Patrimonial </button >
            
      </div>
      <div class="btn-group" role="group">
            <button type="button" class="btn btn-default" 
            onclick ="javascript: window.location.href= 'sala_tela.php'">Cadastro de sala </button>
            
      </div>
          <div class="btn-group" role="group">
             <button type="button" class="btn btn-default" 
             onclick ="javascript: window.location.href= 'cadpredio_tela.php'">Cadastro de Predio </button>
             
      </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default" 
            onclick ="javascript: window.location.href= 'CdtDepartamento_tela.php'" >Cadastro de Departamento  </button>
          </div>
      </div>
    </div>
  </div>
</div>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
</body>
</html>