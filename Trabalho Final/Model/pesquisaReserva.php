<?php
	include_once 'conexao.php'

	$codHotel = $_POST['codHotelPesquisa'];
	$nRegistro = $_POST['numRegistroPesquisa'];
	$dataReserva = $_POST['dataReservaPesquisa'];

	$query = $mysqli->prepare("SELECT * FROM reserva WHERE codHotel = ? AND nRegistro = ? AND dataReserva = ?;");
	$query->bind_param("sss",$codHotel,$nRegistro,$dataReserva);

	$result = $query->execute();
	if(!$result){
		die("Erro na inserção");
		echo mysqli_error();
	}
	else
	{
		$row = $result->fetch_row(); //resultado
	}
	$query->close();
	$mysqli->close();
?>