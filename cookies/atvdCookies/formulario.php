	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Formulário</title>

	</head>
	<body>
		<h2>Votação</h2>

		<form action="retorno.php" method="post">

		<!-- <div class="container"> -->
			<label>Vote no maior time</label><br>
			<div class="containerr">
				<label>São Paulo</label>
				<input type="radio" name="voto" value="saopaulo"> 
				<label>Santos</label>
				<input type="radio" name="voto" value="santos">
				<label>Corinthians</label>
				<input type="radio" name="voto" value="gamba">
				<label>Palmeiras</label>
				<input type="radio" name="voto" value="palmeiras"><br>
			</div>
			<div class="image">


			<img src="Saopaulo.png">
			<img src="santos.png">
			<img src="Corinthians.png">
			<img src="palmeiras.jpg">
			</div>
			
		<!-- </div> -->

			<button type="submit">Enviar</button>

		</form>
	</body>
	</html>