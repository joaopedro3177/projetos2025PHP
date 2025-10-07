<?php 
//ex002

// $contP = 0;
// $contN = 0;
// $contPa = 0;
// $contIn = 0;


// $numeros = array(1,2,3,4,5,6,-5,-7,-9,-4);

// for ($i=0 ; $i < 10 ; $i++ ) {
// 	$numero = $numeros[$i];


// 	if ($numero > 0) {
// 		$contP ++;
// 	 }


// 	elseif($numero < 0){
// 		$contN ++;


// 	} 

	


// 	if($numero % 2 == 0){
// 		$contPa ++;

// 	}

// 	else{
// 		$contIn ++;



// 	}
	
// }

// echo("Foram digitados $contP números positivos <br/>Foram digitados $contN números negativos <br/>Foram digitados $contPa números pares <br/>Foram digitados $contIn números ímpares <br/>");



//ex003
$resultado = 0;
$soma = 0;
$numeroM = 5;
$numeros = array(1,2,3,4,5,6,7,8,9,10);

for ($i=0; $i < 10 ; $i++) { 
	$soma += $numeros[$i];
}

$resultado = $soma * $numeroM;

echo "O resultado foi de $resultado";








 ?>