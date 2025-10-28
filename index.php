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
			<main class="container">
			<h1>Cadastro de usuários</h1>
			


			<form action="include/cadastrar.php" method="post" class="form">
				<div class="md-3">
				<label for="primeiroNome">Primeiro nome</label>
				
				<input type="text" name="primeiroNome" id="primeiroNome" placeholder="Primeiro nome..." maxlength="50" required autofocus autocomplete="off">
				
				</div>
				<div class="md-3">
				<label for="primeiroNome">Sobrenome</label>
				
				<input type="text" name="segundoNome" id="segundoNome" placeholder="Sobrenome" maxlength="50" required autocomplete="off">
				</div>
				<div class="md-3">

				<label for="escolhaPets">Escolha seu Pet</label>
				<select id="escolhaPets" name="escolhaPets">
					<option value="nenhum">Nenhum</option>
					<option value="cachorro">Cachorro</option>
					<option value="gato">Gato</option>
					<option value="boi">Boi</option>
					<option value="galo">Galo</option>
					<option value="sapo">Sapo</option>
					<option value="sarue">Sarue</option>
				</select>
				</div>

				<label>Escolha um ou mais pet</label>
				<input type="checkbox" name="cachorro"><label>Cachorro</label>
				<input type="checkbox" name="gato"><label>Gato</label>
				<input type="checkbox" name="boi"><label>Boi</label>
				<input type="checkbox" name="galo"><label>Galo</label>
				<input type="checkbox" name="sapo"><label>Sapo</label>
				<input type="checkbox" name="sarue"><label>Sarue</label>


				<br>

				<label>Estado Civil</label>
				<br>
				<input type="radio" name="estado_civil" value="casado">
				<br>
				<label>Casado</label>
				<br>
				<input type="radio" name="estado_civil" value="solteiro">
				<br>
				<label>Solteiro</label>
				<br>
				<br>

				<h2>Formulário - Recebendo dados - Elementos ocultos</h2>


				<input type="hidden" name="user" value="admin">
				<input type="hidden" name="nivel" value="2">


				

		


			
				<select name="estados">
					<option value="SP">São Paulo</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="MG">Minas Gerais</option>
					<option value="BA">Bahia</option>
				</select><br><br>


				<textarea name="msg" cols="50" rows="8"></textarea>
				<br>



				<button class="btn btn-success" type="submit">Enviar</button>
				<button class="btn btn-secondary" type="reset">Limpar</button>
				
		



	


			</form>

			


			

			</main>






			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
		</body>
		</html>