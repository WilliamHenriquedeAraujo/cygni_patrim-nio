<?php
         $strBd = "host=localhost port=5432 dbname=patrimonio user=postgres password=root";
		 $conexao = pg_connect($strBd);
		 
		if (!$conexao){
			echo "Não foi possível estabelecer uma conexão com o Banco.";
		}else{
			$codigo = $_POST ['codigo'];
			$nome =  strip_tags($_POST ['nome']);
			$endereco =  strip_tags( $_POST ['endereco']);
			
			$query = "INSERT INTO predio VALUES ('$_POST[codigo]','$_POST[nome]','$_POST[endereco]')";  

			pg_query($query);
			
			echo "Prédio cadastrado com sucesso!!";
			
		}
		
		pg_close($conexao);	
			
			
?>