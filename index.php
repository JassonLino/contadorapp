<?php

require ('funcoes.php');


if ($_POST ['acao'] == "adicionar")
{
	criarcontador($_POST['cont']);
}
else if ($_POST ['acao'] == "mais")
{
		incrementarcontador($_POST ['Codigo']);
}
$contadores = buscarcontador();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="contador.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contador App</title>
</head>
<body>
	<header>
		<h1>Contador de Coisas</h1>
	</header>
	<div id="container">
		<main>
		
		<?php foreach ($contadores as $c): ?>

			<form action="index.php" method="post">  
					<button name="acao" class="bot" value="menos">⊖</button> 
					<p><?= $c['Nome'] ?></p> 
					<p><?= $c['Numero']  ?></p>
					<input type="hidden" name="Codigo" value="<?= $c['Codigo']  ?>">
			<button name="acao" class="bot" value="mais">⊕</button>
			</form>
		<?php endforeach; ?>

		</main>
		<hr>
		<footer>
		<form action="index.php" method="post">
			<p>
         <label for="icont">Novo contador</label> </p>

         <p><input type="nome" id="icont" name="cont">
         <button id="add" name="acao" value="adicionar">Adicionar</button></p>
    	 </form>
		</footer>
	</div>
</body>
</html>