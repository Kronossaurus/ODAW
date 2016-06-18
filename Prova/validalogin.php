<?php
	$login = $_GET['login'];
	$senha = $_GET['senha'];
	$conexao = mysql_connect('localhost','root','');
	//echo $conexao;
	$bd = mysql_select_db('prova2');
	if(!$bd) echo 'nao conectou';
	//echo $bd;
	$query = "select 1 from usuario where login = '".$login."' and senha = '".$senha."';";
	//echo $query;
	$result = mysql_query($query);
	//echo $result;
	if(mysql_result($result,0) == 1)
		header("Location: crudprodutos.php");
	else echo "Login Inválido";
?>
