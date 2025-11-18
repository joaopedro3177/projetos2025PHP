<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
	<h2>Votação</h2>

	<form action="retorno.php" method="post">
		<label>Vote no maior time</label><br>

		<label>São Paulo</label>
		<input type="radio" name="voto" value="saopaulo"><br>
		<label>Santos</label>
		<input type="radio" name="voto" value="santos"><br>
		<label>Corinthians</label>
		<input type="radio" name="voto" value="gamba"><br>
		<label>Palmeiras</label>
		<input type="radio" name="voto" value="palmeiras"><br>


		<button type="submit">Enviar</button>

	</form>
</body>
</html>