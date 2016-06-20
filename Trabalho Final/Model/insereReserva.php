<?php
	include_once 'conexão.php'

	$nome = $_POST['nomeCliente'];
	$hotel = $_POST['nomeHotel'];
	$quarto = $_POST['tipoQuarto']; //AQUI É BOOL, MUDAR NA QUERY
	$dtReserva = $_POST['dataReserva'];

	$query = $mysqli->prepare("INSERT INTO reserva VALUES(?,?,?,?);");//inserindo com prepared statements
	$query->bind_param("ssss",$nome,$hotel,$quarto,$dtReserva);

	$result = $query->execute();
	if(!$result){
		die("Erro na inserção");
		echo mysqli_error();
	}
	else
		echo "Sucesso";
	$query->close();
	$mysqli->close();
?>