<?php
	include_once 'conexao.php'

	$dtCIn 		= date("Y-m-d H:i:s");
	$dtCOut 	= date("Y-m-d H:i:s");
	$codHotel 	= $_POST['codHotelPesquisa'];
	$nRegistro 	= $_POST['numRegistroPesquisa'];
	

	$query = $mysqli->prepare("INSERT INTO estadia VALUES (?,?,?,?)");
	$query->bind_param("ssss",$dtCIn,$dtCOut,$codHotel,$nRegistro);

	$result = $query->execute();
	if(!$result){
		die("Erro na inserção");
		echo mysqli_error();
	}
	$query->close();
	$mysqli->close();
?>