<?php 
$salarioBruto = 5000;
$salarioLiquido = 0;
$inss = 0.86;



function DescontarIr($salarioBruto, $salarioLiquido){
	if($salarioBruto <= 2259) {
		echo ("O salario nao atende os requisitos para o desconto!");
		return($salarioBruto);


	}

	elseif ($salarioBruto > 2259 || $salarioBruto <= 2826) {
		$salarioLiquido = $salarioBruto * 0.925;
		return($salarioLiquido);
		

	}

	elseif ($salarioBruto > 2826 || $salarioBruto <= 3751) {
		$salarioLiquido = $salarioBruto * 0.85;
		return($salarioLiquido);
	}

	elseif ($salarioBruto > 3751 || $salarioBruto <= 4664) {
		$salarioLiquido = $salarioBruto * 0.775;
		return($salarioLiquido);
	}

	elseif ($salarioBruto > 4664) {
		$salarioLiquido = $salarioBruto * 0.725;
		return($salarioLiquido);
		
	}

	else{
		echo("Valor não correspondenete");

	}



}

function DescontarInss($salarioLiquido, $salarioBruto, $inss){
	$salarioLiquido = DescontarIr($salarioBruto, $salarioLiquido) * $inss;
	return($salarioLiquido);
	
}


function exibir($salarioLiquido, $salarioBruto, $inss){
	DescontarInss($salarioLiquido, $salarioBruto, $inss);
	echo("O salario inicial foi de $salarioBruto <br/> O desconto de INSS foi de $inss <br/> O salario final ficou de " . DescontarInss($salarioLiquido, $salarioBruto, $inss));


}

exibir($salarioLiquido, $salarioBruto, $inss);

 ?>
