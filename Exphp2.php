<!--
Veja os exemplos de uso de formulário HTML e PHP neste tutorial, assim como o uso dos métodos GET e POST:
http://www.w3schools.com/php/php_forms.asp

1- Criar um formulário com pelo menos um campo de cada tipo: texto, senha, área de texto, select, checkbox, radio, botões (submit e reset).
a) Mostrar mensagem de erro até que todos os campos sejam preenchidos, com validação em PHP;b) Mostrar mensagem de confirmação com as informações digitadas/escolhidas pelo usuário.

2- Validar usuário e senha com as informações de um arquivo 'autenticacao.txt'.

3- Pesquise e teste uma forma de armazenar e validar uma senha cifrada.

Obs. A próxima aula de 31/03 ficará disponível para finalização dos exercícios de PHP, esclarecimento de dúvidas e mostrar os exercícios resolvidos.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
	<title>Exercícios dia 31/03/16</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.24" />
	<?php
		$user = "";
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['user']))
				echo "<script>alert('Nome Vazio');</script>";
			else
				$user = test_input($_POST['user']);
			
			if(empty($_POST['pass']))
				echo "<script>alert('Senha Vazia');</script>";
			else{
				$pass = md5(test_input($_POST['pass']));
				if((login($user, $pass))==1)
					echo "<script>alert('Login Valido');</script>";
				else
					echo "<script>alert('Login Invalido');</script>";
			}
		}
	
		function login($nome, $pass){
			$arq = fopen("autenticacao.txt", "r");
			while(($dados = fgetcsv($arq,",")) !== FALSE){
				if($nome === $dados[0] and $pass === $dados[1]){
					return 1;
				}
			}
			return 0;
		}

		
	?>
</head>

<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		Nome: <input type="text" name="user" value="<?php echo $user;?>" />
		Senha: <input type="password" name="pass"/><br><br>
		<textarea name="tarea"></textarea>
		Check <input type="checkbox" name=""/><br><br>
		Masculino <input type="radio" name="sexo"/>
		Feminino <input type="radio" name="sexo"/>
		<input type="submit"/>
		<input type="reset"/>
	</form>
</body>

</html>
