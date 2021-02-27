<?php
	/*
	
	Em PHP, aplique as validações necessárias para que se garanta que as variáveis abaixo existam, tenham um valor e que estejam no tipo correto para ser utilizado: (Se desejar, pode encaminhar link para solução no GitHub, preferimos).

a) Validar a variável: $variavel = 198;

b) Validar o array e o indice “endereco”:

$variavel = [ “nome” => “Pedro Luiz”, “endereco” => “Av Taquara”, “telefone” => “(51) 5151-51511” ];

C) VALIDAR A VARIÁVEL: $variavel = “Romarinho”;
	
	*/

	
	$variavel="Romarinho";
	if(is_null($variavel) OR !is_string($variavel)){
		ECHO "<script>alert('Erro! Deve ser passado um número inteiro.');</script>";
	}else{
		echo "O valor da variável é $variavel.";
		
	}
	
?>
