<?php
	if (!$conexao = mysql_connect('localhost','root','')) {
		die('Não conectou');
	}
	$bd = 'hotel';
	mysql_select_db($bd);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>CRUD de Clientes</title>
</head>
<body>
	<form name="formClientes" method="POST">
		<table>
			<tr>
				<td colspan="2" align="center">Clientes</td>
			</tr>
			<tr>
				<td>Código:</td>
				<td><input type="text" name="idCliente"></input></td>
			</tr>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nomeCliente"></input></td>
			</tr>
			<tr>
				<td>Endereço:</td>
				<td><input type="text" name="enderecoCliente"></input></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="foneCliente"></input></td>
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