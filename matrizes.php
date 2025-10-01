<?php 
	$emp = array(
		array(1, "João", 1000),
		array(2, "Maria", 2000),
		array(3, "Pedro", 3000)


	);

	echo("<pre>");
	var_dump($emp);
	echo("</pre>");






	for($linha = 0; $linha < 3; $linha++){
		for($coluna = 0; $coluna < 3; $coluna++){
			var_dump($emp[$linha][$coluna] . "  ");
						


		}

	echo "<br/>";

	}



	$arr = array('v' => 'Vermelho', 'v' => 'Verde', 'a' => array('azul', 'marrom', 'preto'));


	echo json_encode($arr);

	echo "<br/>";

	$arr = array(1,2,3,4,5);
	echo json_encode($arr);


	echo '<br/>';

	$arr = array(1,2,3,4,5);

	foreach($arr as $value){
		echo $value . ' ';

	}

	echo "<br/>";


	$arr = array('v' => 'Vermelho', 'e' => 'Verde', 'z' => 'azul');

	foreach($arr as $key => $value){
		echo $key . "=>" . $value . "\n";

 

	}






 ?>