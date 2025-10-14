<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulários</title>
</head>
<body>
	<h1>Formulários</h1>

	<form action="cadastrar.php" method="post">
		<label for="nome">Nome:</label>
		<br> 

		<input type="text" name="nome" id="nome">
		<br><br>

		<label for="email"> Email:</label>
		<br>
		<input type="email" name="email" id="email">
		<br><br>

		<input type="submit" name="enviar">
		<button type="submit">Cadastrar</button>
		
	</form>

	<a href="<?php  ?>">Executando</a>
</body>
</html>