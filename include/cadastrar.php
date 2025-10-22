<?php 



	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$primerioNome = $_POST['primeiroNome'];
		$segundoNome = $_POST['segundoNome'];
		$escolhaPets = $_POST['escolhaPets'];
	

	
	



	echo ($primerioNome . "-" . $segundoNome . "-" . $escolhaPets . "<br>");


	echo '<a href = "../index.php">Voltar</a>';

 	// header("location: ../index.php");

 	}else{
		echo("É get");


	}



 ?>