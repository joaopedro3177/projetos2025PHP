<?php 
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	if($nome == "João" && $email == "joao@gmail.com"){
		echo "<table border = 1>";
		echo "<tr>";
		echo "<td>";
		echo(" <b> Cadastro feito com sucesso! <b>");
		echo "</td>";
		echo "</tr>";
		echo "</table>";


	}

	else{
		echo(" <b> Usuário ou senha inválidos <b>");
	}


	


 ?>