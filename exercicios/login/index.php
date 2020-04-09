<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>
	<form method="POST" action="index.php">
		<input type="text" name="login" placeholder="Digite seu login">
		<input type="password" name="pass" placeholder="Digite sua senha">
		<input type="submit" value="Logar">
	</form>
	
	<?php if (isset($_POST['login']) && isset($_POST['pass'])) { ?>
		<?php $login = htmlspecialchars($_POST['login']); 
			$password = htmlspecialchars($_POST['pass']); if ($login != "etec") { ?>
			<h4>Seu login está incorreto!</h4>
		<?php } else if ($password != "informática") { ?>
			<h4>Sua senha está incorreta!</h4>
		<?php } else { ?>
			<h4>Logado com sucesso!</h4>
		<?php } ?>
	<?php } ?>
</body>

</html>