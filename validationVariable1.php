	<?php
	
	// VALIDAÇAO DA VARIÁVEL $VARIAVEL COMO INT.
	
	$variavel=198;
	if(is_null($variavel) OR !is_int($variavel)){
		ECHO "<script>alert('Erro! Deve ser passado um número inteiro.');</script>";
	}else{
		echo "O valor da variável é $variavel.";
				
	}
	
	?>
	