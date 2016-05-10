<?php
	$mysqli = new mysqli("localhost", "root", "");
	$mysqli->select_db('hotel');
	//$nRegistro = $_POST['idCLiente'];
	$nome = $_POST['nomeCliente'];
	$endereço = $_POST['enderecoCliente'];
	$telefone = $_POST['foneCliente'];
	$query = sprintf("SELECT insereCliente('%s', '%s', %d);",
		$mysqli->real_escape_string($nome),
		$mysqli->real_escape_string($endereço),
		$telefone);
	$result = $mysqli->query($query);
	if (!$result) {
		die("Erro na inserção");
		echo mysqli_error();
	}
	else
		echo "Sucesso";
?>