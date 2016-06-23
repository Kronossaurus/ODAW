<?php
	include_once 'conexao.php';

	$dtCIn 		= date("Y-m-d H:i:s");
	$dtCOut 	= $_POST['dataReservaPesquisa'];
	$codHotel 	= $_POST['codHotelPesquisa'];
	$nRegistro 	= $_POST['numRegistroPesquisa'];
	

	$query = $mysqli->prepare("INSERT INTO estadias (dtCIn,dtCOut,codHotel,nRegistro)VALUES (?,?,?,?)");
	$query->bind_param("ssss",$dtCIn,$dtCOut,$codHotel,$nRegistro);

	$result = $query->execute();
	if(!$result){
		echo mysqli_error();
		die("Erro na inserção");
	}
	else
		echo "Estadia Registrada";
	$query->close();
	$mysqli->close();
?>