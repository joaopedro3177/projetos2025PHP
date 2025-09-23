<?php 
	$alunos = array();


	$alunos[0]= "Maria";
	$alunos[1]= "José";



	echo($alunos[0] . "<br/>");
	echo($alunos[1]);
	echo("<br/>");
	echo "<pre>";


	$email[] = "joaogameplaycarros@gmail.com";
	$email[] = "pindamonhangaba@gmail.com";
	$email[] = "lazarobarboza444@gmail.com";


	print_r($email);
	echo("<br/>");
	echo "<pre>";
	var_dump($email);
	echo "<pre>";



	$aluno = array("Oslvado", 26, "osvaldo@hotmal.com",25.5, true);
	echo ("<pre>");
	var_dump($aluno);
	echo("</pre>");

	echo("<br/>");
	echo ("<pre>");
	print_r($aluno);
	echo("</pre>");



	for ($i=0; $i < 6 ; $i++) { 
		$vetor[$i] = 12;
		

	}

	echo("<br/>");

	for ($i=0; $i < 6 ; $i++) { 
		echo "O valor do vetor: " . $vetor[$i];
		echo("<br/>");
	}
	
	






 ?>