<?php
         $strBd = "host=localhost port=5432 dbname=patrimonio user=postgres password=123456";
		 $conexao = pg_connect($strBd);
		 
		if (!$conexao){
			echo "Não foi possível estabelecer uma conexão com o Banco.";
		}else{
			$sala = $_POST ['_sala'];
			$comprimento = $_POST ['comprimento'];
			$largura = $_POST ['largura'];
			$codPredio = $_POST ['codPredio'];
			$siglaDpto =  strip_tags( $_POST ['siglaDpto']);
			
			$query = "INSERT INTO sala VALUES ('$_POST[_sala]','$_POST[comprimento]','$_POST[largura]', '$_POST[codPredio]' ,'$_POST[siglaDpto]')";  
			pg_query($query);
			
			echo "Sala cadastrada com sucesso!!";
			
		}
		
		pg_close($conexao);	
			
			
?>

