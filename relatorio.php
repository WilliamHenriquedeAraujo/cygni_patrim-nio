<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cygni - Relatórios</title>
 <script type="text/javascript" src="permissao_acesso.js">
 </script>


 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
    <?php
  
        session_start();

        echo "<strong>".$_SESSION['nivel_usuario']." ".$_SESSION['nome_usuario'].".</strong>";
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
    <li><a href="CdUsuario_tela.php">Cadastrar usuário</a></li>
	<a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
    

  </div>
 </div>
</nav>

 <div id="main" class="container-fluid">
  <div id="top" class="row">
 
     </div> <!-- /#top -->
 
     <hr />
     <div id="list" class="row">
     
     </div> <!-- /#list -->
 
     <div id="bottom" class="row">
     
     </div> <!-- /#bottom -->
 </div>  <!-- /#main -->
 
 
 <div id="top" class="">
 
 <div class="col-md-3">
        <h2>Emissão de Relatórios</h2>
		</br>
    </div>
 
   
 
   
</div> <!-- /#top -->
 
 
 
 <div id="list" class="">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Tipo de Relatório</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="actions"></th>
                 </tr>
            </thead>
            <tbody>
 
                <tr>
         
                    <td>Emitir relação de bens por sala</td>
                    <td></td>
                    <td></td>
					<td></td>
					<td></td>
					<td></td>
					
					
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="relatorio_sala.html">Gerar Relatório</a>
   
                    
					</td>
                </tr>
 
            </tbody>
         </table>
		
		
		<div id="lix'x'st" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
           
            <tbody>
 
                <tr>
      
                    <td>Emitir relação de bens por prédio</td>
                     <td></td>
                    <td></td>
					<td></td>
					<td></td>
					<td></td>
					
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="relatoriopredio.php">Gerar Relatório</a>
   
                    
					</td>
                </tr>
 
            </tbody>
         </table>
		 
		 
		 <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
           
            <tbody>
 
                <tr>
      
                    <td>Relação de bens em manutenção</td>
                     <td></td>
                    <td></td>
					<td></td>
					<td></td>
					<td></td>
					
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="relatorioPatrimonial.php">Gerar Relatório</a>
   
                    
					</td>
                </tr>
 
            </tbody>
         </table>
		
		
		
		
		
		
		
		
		
		
		
 
     </div>
 </div> <!-- /#list -->
 
 
 
 
 
 </div>










 
</body>
</html>
