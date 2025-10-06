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
$somaA = 0;
$somaB = 0;

$matriz1 =  array(
	array(25, 12, 35),
	array(85, 47, 98),
	array(32, 38, 105)
);

$matriz2 = array(
	array(98,65,35),
	array(5,27,8),
	array(17,14,3)



);
   

for ($i=0; $i < 3 ; $i++) {
	for ($j=0; $j < 3 ; $j++) { 
		$somaA = $somaA + $matriz1[$i][$j];
		$somaB = $somaB + $matriz2[$i][$j];


	}
}
echo "<pre>";
print_r($somaA);
echo "</pre>";

echo "<br/>";

echo "<pre>";
print_r($somaB);
echo "</pre>";
 ?>