<!DOCTYPE html>
<html>

<head>
	<title>Média geral</title>
</head>

<body>
	<?php $array = array(0 => $_POST['nota-1'], 1 => $_POST['nota-2'], 2 => $_POST['nota-3'] ); 
		$MG = $array[0] + $array[1] + $array[2]; $MG = $MG / 3; ?>
	
	<h4>Sua média geral é de <?php echo $MG; ?> pontos.</h4>
	<?php if ($MG >= 6) { ?>
		<h4>Parabéns, você passou!</h4>
	<?php } else { ?>
		<h4>Você não passou. :( </h4>
	<?php } ?>
	
	<button onclick="window.location.href='index.php'">Voltar</button>
</body>

</html>