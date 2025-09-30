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



 ?>