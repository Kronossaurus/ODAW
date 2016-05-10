<?php
	$mysqli = new mysqli("localhost", "root", "");
	$mysqli->mysql_select_db('hotel');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>CRUD de Clientes</title>
</head>
<body>
	<form name="formClientes" method="POST" action="insereCliente.php">
		<table align="center">
			<tr>
				<td colspan="2" align="center">Inserir Clientes</td>
			</tr>
			<!--<tr>
				<td>Código:</td>
				<td><input type="text" name="idCliente"></input></td>
			</tr>-->
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nomeCliente" autocomplete="off"></input></td>
			</tr>
			<tr>
				<td>Endereço:</td>
				<td><input type="text" name="enderecoCliente" autocomplete="off"></input></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="foneCliente" autocomplete="off"></input></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="reset"></input>
					<input type="submit" formaction="insereCliente.php"></input>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>