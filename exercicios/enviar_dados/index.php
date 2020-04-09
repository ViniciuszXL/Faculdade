<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>
	<form method="POST" action="index.php">
		<input type="text" name="nome" placeholder="Digite seu nome">
		<input type="email" name="email" placeholder="Digite seu email">
		<input type="date" name="data" placeholder="Digite sua data de nascimento">
		
		<input type="submit" value="Enviar dados">
	</form>
	
	<?php if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['data'])) { ?>
		<?php $nome = htmlspecialchars($_POST['nome']); 
			$email = htmlspecialchars($_POST['email']);
			$data = htmlspecialchars($_POST['data']); ?>
			
		<h4>Seu nome: <?php echo $nome; ?></h4>
		<h4>Seu email: <?php echo $email; ?></h4>
		<h4>Sua data de nascimento: <?php echo $data; ?></h4>
	<?php } ?>
</body>

</html>