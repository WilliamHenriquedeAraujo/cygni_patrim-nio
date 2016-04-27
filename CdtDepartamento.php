<?php
         $strBd = "host=localhost port=5432 dbname=patrimonio user=postgres password=123456";
		 $conexao = pg_connect($strBd);
		 
		if (!$conexao){
			echo "Não foi possível estabelecer uma conexão com o Banco.";
		}else{
			$sigla = $_POST ['sigla'];
			$nome =  strip_tags($_POST ['nome']);
			$responsavel =  strip_tags( $_POST ['responsavel']);
			
			$query = "INSERT INTO departamento VALUES ('$_POST[sigla]','$_POST[nome]','$_POST[responsavel]')";  
			pg_query($query);
			
			echo "Prédio cadastrado com sucesso!!";
			
		}
		
		pg_close($conexao);	
			
			
?>