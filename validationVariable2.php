<?php
	// VALIDAÇÃO DE $VARIAVEL = "ROMARINHO"
	
	$variavel="Romarinho";
	if(is_null($variavel) OR !is_string($variavel)){
		ECHO "<script>alert('Erro! Deve ser passado um número inteiro.');</script>";
	}else{
		echo "O valor da variável é $variavel.";
		echo date("d/m/Y");
	}
	
?>