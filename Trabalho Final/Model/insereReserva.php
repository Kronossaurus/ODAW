<?php
	include_once 'conexao.php';

	$camaExtra		= $_POST['camaExtra'];
	$nRegistro		= $_POST['nRegistro'];//aqui tava nomeCliente mas a consulta é com o cod
	$codHotel 		= $_POST['codHotel'];//era nomeHotel
	$quarto 		= $_POST['tipoQuarto']; //AQUI É BOOL, MUDAR NA QUERY
	$dataReserva 	= $_POST['dataReserva'];


	$query = $mysqli->prepare("INSERT INTO reserva (dataReserva,camaExtra,codHotel,nRegistro) VALUES(?,?,?,?);");//inserindo com prepared statements
	$query->bind_param("ssss",$dataReserva,$camaExtra,$codHotel,$nRegistro);

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