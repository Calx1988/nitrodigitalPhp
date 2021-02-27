	<?php
	/*
	Em PHP, aplique as validações necessárias para que se garanta que as variáveis abaixo existam, tenham um valor e que estejam no tipo correto para ser utilizado: (Se desejar, pode encaminhar link para solução no GitHub, preferimos).

A) VALIDAR A VARIÁVEL: $variavel = 198;

b) Validar o array e o indice “endereco”:

$variavel = [ “nome” => “Pedro Luiz”, “endereco” => “Av Taquara”, “telefone” => “(51) 5151-51511” ];

c) Validar a variável: $variavel = “Romarinho”;
	
	*/
	
	
	$variavel=198;
	if(is_null($variavel) OR !is_int($variavel)){
		ECHO "<script>alert('Erro! Deve ser passado um número inteiro.');</script>";
	}else{
		echo "O valor da variável é $variavel.";
				
	}
	
	?>
	
