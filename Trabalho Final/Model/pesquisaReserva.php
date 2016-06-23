<?php
	include_once 'conexao.php';

	$codHotel = $_POST['codHotelPesquisa'];
	$nRegistro = $_POST['numRegistroPesquisa'];
	$dataReserva = $_POST['dataReservaPesquisa'];

	$query = $mysqli->prepare("SELECT * FROM reserva WHERE codHotel = ? AND nRegistro = ? AND dataReserva = ?;");
	$query->bind_param("sss",$codHotel,$nRegistro,$dataReserva);

	$result = $query->execute();
	if(!$result){
		echo mysqli_error();
		die("Erro na inserção");
	}
	else
	{
		$query->bind_result($dataPagamento,$dataReserva,$camaExtra,$codHotel,$nRegistro,$tipoQuarto);
		$query->fetch(); //resultado
		printf("%s, %s, %s, %s, %s, %s\n",$dataPagamento,$dataReserva,$camaExtra,$codHotel,$nRegistro,$tipoQuarto);
	}
	$query->close();
	$mysqli->close();
?>