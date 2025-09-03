<?php 
$salarioBruto = 2500;
$salarioLiquido = 0;
$inss = 86;
$ir = 0;

function DescontarIr($ir, $salarioBruto, $salarioLiquido){
	if($salarioBruto <= 2259) {
		echo ("O salario nao atende os requisitos para o desconto!");


	}

	elseif ($salarioBruto > 2259 || $salarioBruto <= 2826) {
		$salarioLiquido = $salarioBruto * 0.925;
		echo("$salarioLiquido");

	}



}




function DescontarInss() {

	if($salarioBruto <= 2259){



	}



}

DescontarIr($ir,$salarioBruto, $salarioLiquido);
 ?>
