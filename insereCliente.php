<?php
	$nRegistro = $_POST['idCLiente'];
	$nome = $_POST['nomeCliente'];
	$endereço = $_POST['enderecoCliente'];
	$telefone = $_POST['foneCliente'];

	$query = "SELECT insereCliente(".$nome.",".$endereço.",".$telefone.");";
	if (!mysql_query($query) {
		die("Erro na inserção");
	}
	else
		echo "Sucesso";
?>