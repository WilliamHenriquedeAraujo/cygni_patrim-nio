<html>
	<header>
		<script language="javascript">



function validaSenha (input){ 
    if (input.value != document.getElementById('senha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 

</script>

    <?php
  
        session_start();

        echo "<strong>".$_SESSION['nivel_usuario']." ".$_SESSION['nome_usuario'].".</strong>";
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
   <a class="navbar-brand" href="index.php">Cygin Patrimônio</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
   <li><a href="index.php">Início</a></li>
	<li><a href="relatorio.php">Emitir Relatórios</a></li>
	<a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
 
   </ul>
  </div>
 </div>
</nav>

<div id="main" class="container-fluid">
    <br>
    <br>
    <h1>Cadastro de Usuario </h1>

	</header>

 
<Body>
    <div class="container">
  <div class="jumbotron">
    <div class="row">
	

  
	
	
        <form name="frmcad" id="frmcad" action="CdUsuario.php" method="POST" "onSubmit=javascript: return validaSenha(form) (); " >
            
            

            

            <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
            </div>
			
			<div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
            </div>
			

            <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
            </div>

            <div class="form-group">
            <label for="conf_senha">Confirme a Senha</label>
            <input type="password" class="form-control" id="conf_senha" placeholder="Senha" required>
            </div>
            <div class="form-group">
                <label for="conf_senha">Selecione um Nível</label>
              <select class="form-control" id="nivel" name="nivel">
                  <option> escolha </option>
                  <option  value="g">Gerente</option>
                  <option  value="f"> Funcionário</option>
                
                </select>
            </div>


            
                <div id="actions" class="row">
                <div class="col-md-12">
                
                
                </div>
                </div>
            <br><input type="submit" name="inserir" id="btninserir"  class="btn btn-primary" value="Cadastrar" onclick="validaSenha()" />  
			  <a href="index.php" class="btn btn-default">Cancelar</a>

        </form>
    </div>
  </div>
</div>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
</Body>
</html>