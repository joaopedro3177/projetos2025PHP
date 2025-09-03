<?php 
$salarioBruto = 5000;
$salarioLiquido = 0;
$inss = 86;
$ir = 0;

function DescontarIr($ir, $salarioBruto, $salarioLiquido){
	if($salarioBruto <= 2259) {
		echo ("O salario nao atende os requisitos para o desconto!");
		return($salarioBruto);


	}

	elseif ($salarioBruto > 2259 || $salarioBruto <= 2826) {
		$salarioLiquido = $salarioBruto * 0.925;
		echo ($salarioLiquido);
		return($salarioLiquido);
		

	}

	elseif ($salarioBruto > 2826 || $salarioBruto <= 3751) {
		$salarioLiquido = $salarioBruto * 0.85;
		echo($salarioLiquido);
		return($salarioLiquido);
	}

	elseif ($salarioBruto > 3751 || $salarioBruto <= 4664) {
		$salarioLiquido = $salarioBruto * 0.775;
		echo($salarioLiquido);
		return($salarioLiquido);
	}

	elseif ($salarioBruto > 4664) {
		$salarioLiquido = $salarioBruto * 0.725;
		echo($salarioLiquido);
		return($salarioLiquido);
		
	}



}




/*function DescontarInss() {

	if($salarioBruto <= 2259){



	}



}*/

DescontarIr($ir,$salarioBruto, $salarioLiquido);
 ?>
