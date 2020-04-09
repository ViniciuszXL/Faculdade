<!DOCTYPE html>
<html>

<head>
	<title>Média geral</title>
</head>

<body>
	<?php $fat = $_POST['fat']; $processamento = ($fat * 2) * 1; ?>
	<h4>Cálculo fatorial: <?php echo $processamento; ?></h4>
	<button onclick="window.location.href='index.php'">Voltar</button>
</body>

</html>