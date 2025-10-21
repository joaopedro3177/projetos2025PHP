<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Cadastro de usuários</h1>


	<form action="#" method="post">
		<label for="primeiroNome">Primeiro nome</label>
		
		<input type="text" name="primeiroNome" id="primeiroNome" placeholder="Primeiro nome..." maxlength="50" required autofocus>
		

		<label for="primeiroNome">Sobrenome</label>
		
		<input type="text" name="segundoNome" id="segundoNome" placeholder="Sobrenome" maxlength="50" required>


		<label for="escolhaPets">Escolha seu Pet</label>
		<select id="escolhaPets" name="escolhaPets">
			<option value="nenhum">Nenhum</option>
			<option value="cachorro">Cachorro</option>
			<option value="gato">Gato</option>
			<option value="boi">Boi</option>
			<option value="galo">Galo</option>
			<option value="sapo">Sapo</option>
			<option value="gamba">Gambá</option>
		</select>

		<button type="submit">Enviar</button>
		<button type="reset">Limpar</button>
		




	</form>






	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>