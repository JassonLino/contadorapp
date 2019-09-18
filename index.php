<?php

require ('funcoes.php');

$contadores = buscarContadores();


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

			<p><button>⊖</button> 
					<p><?= $c['Nome'] ?></p> 
					<p><?= $c['Numero']  ?></p>
			<button>⊕</button>
			</p>
		<?php endforeach; ?>

		</main>
		<hr>
		<footer>
			<p>
         <label for="icont">Novo contador</label> </p>

         <p><input type="nome" id="icont" name="cont">
         <button id="add" type="submit">Adicionar</button></p>
    	 
		</footer>
	</div>
</body>
</html>