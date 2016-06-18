<html>
	<head>
		<title>Login Prova</title>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<table>
			<tr>
				<td>Código</td>
				<td>Descrição</td>
				<td>Preço</td>
			</tr>
			<?php
				$conexao = mysql_connect('localhost','root','');
				$bd = mysql_select_db('prova2');
				$query = "select * from produto;";
				$result = mysql_query($query);
				//echo $result;
				while ($linha = mysql_fetch_row($result))
				{
					echo "
					<tr>
						<td>".$linha[0]."</td>
						<td>".$linha[1]."</td>
						<td>".$linha[2]."</td>
					</tr>";
				}
			?>
		</table>
		<form action = "insereproduto.php" method = "GET">
			<table>
				<tr colspan = "2">
					<td>Inserir Novo Produto</td>
				</tr>
				<tr>
					<td>Descrição</td>
					<td>Preço</td>
				</tr>
				<tr>
					<td><input type = "text" name ="desc"/></td>
					<td><input type = "text" name ="preco"/></td>
				</tr>
				<tr>
					<td><input type = "reset"/>
					<td><input type = "submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
