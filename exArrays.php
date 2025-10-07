<?php 
//ex001

// $matriz1 =  array(
// 	array(25, 12, 35),
// 	array(85, 47, 98),
// 	array(32, 38, 105)
// );

// $matriz2 = array(
// 	array(98,65,35),
// 	array(5,27,8),
// 	array(17,14,3)



// );
// $resultado = array(
// 	array(),
// 	array(),
// 	array()


// );

// for ($i=0; $i < 3 ; $i++) {
// 	for ($j=0; $j < 3 ; $j++) { 
// 	 	$resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];	
// 	 } 
	
// }
// echo "<pre>";
// print_r($resultado);
// echo "</pre>";




//ex002
// $somaA = 0;
// $somaB = 0;

// $matriz1 =  array(
// 	array(25, 12, 35),
// 	array(85, 47, 98),
// 	array(32, 38, 105)
// );

// $matriz2 = array(
// 	array(98,65,35),
// 	array(5,27,8),
// 	array(17,14,3)



// );
   

// for ($i=0; $i < 3 ; $i++) {
// 	for ($j=0; $j < 3 ; $j++) { 
// 		$somaA = $somaA + $matriz1[$i][$j];
// 		$somaB = $somaB + $matriz2[$i][$j];


// 	}
// }
// echo "<pre>";
// print_r($somaA);
// echo "</pre>";

// echo "<br/>";

// echo "<pre>";
// print_r($somaB);
// echo "</pre>";
//  




//ex003
$media = 0;
$soma = 0;
$numero =

$informacoes = array(
	array("João", 10),
	array("Maria", 7),
	array("José", 8),
	array("Sebastião", 6),
	array("Clarencio", 3),
	array("Margarete", 2),
	array("Roberta", 9),
	array("Ana", 1),
	array("Valdemir", 4),
	array("Julia", 5)


);



for ($i=0; $i < 10 ; $i++) { 
	for ($j=0; $j < 2 ; $j++) {
		$numero = $informacoes[$j];
		if ($numero > 0) {
			$soma = $soma + $numero;
		}
		
	}
}



//ex004

// $meses = array("1" => "Janeiro","2" => "Fevereiro","3" => "Março","4" => "Abril","5" => "Maio","6" => "Junho","7" => "Julho","8" => "Agosto","9" => "Setembro","10" => "Outubro","11" => "Novembro","12" => "Dezembro");


// echo "<pre>";
// print_r($meses["6"]);
// echo "</pre>";


?>