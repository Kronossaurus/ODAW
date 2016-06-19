<?php
	include_once 'conexão.php'

	$nome = $_POST['nomeCliente'];
	$hotel = $_POST['nomeHotel'];
	$quarto = $_POST['tipoQuarto']; //AQUI É BOOL, MUDAR NA QUERY
	$dtReserva = $_POST['dataReserva'];

	$query = sprintf("SELECT insereReserva('%s', '%s', '%s', '%s');"//terminar

	$result = $mysqli->query($query);
	if(!$result){
		die("Erro na inserção");
		echo mysqli_error();
	}
	else
		echo "Sucesso";

?>