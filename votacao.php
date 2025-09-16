<?php 
include("cabecalho.php");
	$idade=16;

	if ($idade<16) {
		include("votacao_menor.php");

	}
	 elseif($idade=16){
 	include("votacao16.php");
 	}

 	else{
 		include("votacao_maior.php");
	 }

 	include("rodapE.php");

 ?>
