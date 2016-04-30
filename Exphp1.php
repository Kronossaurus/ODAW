<?php
/*
1 - Mostrar data e hora atual no formato:
Hoje é 22/03/2016 e agora são 17:00h

2 - Criar um contador de visitas com um arquivo txt:
"Esta página foi visitada X vezes"
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">

<head>
	<title>Exercícios dia 22/03/16</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.24" />
</head>

<body>
	<p><?php echo "Hoje é ".date("d/m/y")." e agora são ".date("H:i");?></p>
	
	<p>Essa página foi visitada <?php $arq = fopen("contador.txt","r"); fscanf($arq,"%d",$contador); $contador++; $arq = fopen("contador.txt","w"); fprintf($arq,"%d",$contador); echo $contador;?> vezes</p>
</body>

</html>
