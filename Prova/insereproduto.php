<?php
	$desc = $_GET['desc'];
	$preco = $_GET['preco'];
	$conexao = mysql_connect('localhost','root','');
	$bd = mysql_select_db('prova2');
	$query = "insert into produto values('','".$desc."',".$preco.");";
	$result = mysql_query($query);
	header("Location: crudprodutos.php");
?>
