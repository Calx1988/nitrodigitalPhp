<?php

	/*
	
	Em PHP, aplique as validações necessárias para que se garanta que as variáveis abaixo existam,
	tenham um valor e que estejam no tipo correto para ser utilizado: 
	(Se desejar, pode encaminhar link para solução no GitHub, preferimos).

a) Validar a variável: $variavel = 198;

B) VALIDAR O ARRAY E O ÍNDICE "endereco"

$variavel = [ “nome” => “Pedro Luiz”, “endereco” => “Av Taquara”, “telefone” => “(51) 5151-51511” ];

c) Validar a variável: $variavel = “Romarinho”;
	
	*/
	
	$variavel=array(
		'nome' => '%$#$%¨918',
		'endereco' => 'Av Taquara',
		'telefone' => '(51)5151-51511'
		);
	
	$testeNome=$variavel['nome'];
	
	$testeEndereco=$variavel['endereco'];
	
	// Verificando se há números no campo telefone.
	$testeTelefone=filter_var($variavel['telefone'], FILTER_SANITIZE_NUMBER_INT);
	
	// Validação do nome. Evitar que sejam passados apenas espaços em branco.	
	if(empty($testeNome) OR ctype_space($testeNome)OR !is_string($testeNome)){
		
		echo "<script>alert('Erro! O nome deve ser preenchido.');</script>";
	
	}
	// Validação do endereço. Evitar que sejam passados apenas espaços em branco.
	elseif(empty($testeEndereco)OR ctype_space($testeEndereco) OR !is_string($testeEndereco)){
		
		echo "<script>alert('Erro! O endereço deve ser preenchido.');</script>";
	
	}
	 Validação do telefone. Evitar que o campo esteja vazio, com caracteres inválidos 
	ou com quant incorreta de caracteres. 
	elseif(empty($testeTelefone)OR ctype_space($testeTelefone) OR strlen($testeTelefone)<11 OR strlen($testeTelefone)>12){
		
		echo "<script>alert('Erro! Telefone inválido.');</script>";
	
	}
	// Mensagem após dados corretos serem passados em todos os campos.	
	else{
		echo "Nome: " .$variavel['nome']. " -- ";
		echo "\n\nEndereço: " .$variavel['endereco']. " -- ";
		echo "\n\nTelefone: " .$variavel['telefone'];
		
	}

		
?>
