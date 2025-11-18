<?php 

$voto = $_POST['voto'];

if (isset($_COOKIE['voto'])) {
	setcookie('voto', $voto , time()+3600*24*31 );

	$msg = "obrigado por votar.!!!";

}


else{

$msg = "você ja votou uma vez.!!!";

}

echo $msg;
 ?>
