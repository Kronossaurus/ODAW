<?php
	include_once 'conexao.php';
	//$nRegistro = $_POST['idCLiente'];
	$nome = $_POST['nomeCliente'];
	$endereço = $_POST['enderecoCliente'];
	$telefone = $_POST['foneCliente'];
	$cpf = $_POST['cpfCliente'];
	
	$query = sprintf("SELECT insereCliente('%s', '%s', %d, %d);", //criar a função manualmente no banco
		$mysqli->real_escape_string($nome),
		$mysqli->real_escape_string($endereço),
		$telefone, $cpf);
	
	$result = $mysqli->query($query);
	if (!$result) {
		die("Erro na inserção");
		echo mysqli_error();
	}
	else
		echo "Sucesso";
?>
