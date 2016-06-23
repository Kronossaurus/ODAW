<?php
	include_once 'conexao.php';

	$codHotel 		= $_POST['codHotel'];//era nomeHotel
	$quarto 		= $_POST['tipoQuarto']; //AQUI É BOOL, MUDAR NA QUERY
	$dataReserva 	= $_POST['dataReserva'];
	$tipoQuarto		= $_POST['tipoQuarto'];
	$nRegistro		= $_POST['nRegistro'];//aqui tava nomeCliente mas a consulta é com o cod
	//$camaExtra		= $_POST['camaExtra'];


	$query = $mysqli->prepare("INSERT INTO reserva (dataReserva,codHotel,nRegistro,tipoQuarto) VALUES(?,?,?,?)");//inserindo com prepared statements
	$query->bind_param("ssss",$dataReserva,$codHotel,$nRegistro,$tipoQuarto);
	$result = $query->execute();
	$query->fetch();

	if(!$result){
		echo $mysqli->error;
		die("Erro na inserção");
	}
	else
		echo "Sucesso";
	$query->close();
	$mysqli->close();
?>