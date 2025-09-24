<html>
	<body>
		

		<p>Exemplo declaração de variável sem array</p>

		<?php 
			$nome1 = "Maria";
			$nome2 = "João";
			$nome3 = "Pedro";
			$nome4 = "Paulo";
			$nome5 = "Lucas";


			echo("$nome1 <br/> $nome2 <br/> $nome3 <br/> $nome4 <br/> $nome5 <br/>");

		 ?>


		 <p>Exemplo declaração de variável com array</p>


		 <?php 

		 	$nome = array("Maria", "João", "Pedro", "Paulo", "Lucas");

		 	echo("Os nomes no array<br/>");

		 	foreach ($nome as $nomes) {
		 		echo("<br/> $nomes");
		 	}

		  ?>
	</body>
</html>


<?php 

echo "<br/>";


 ?>

<html>
	<body>
		<?php 
			$num = array(1,2,3,4,5);

			foreach ($num as $valor) {
				echo("Valor é $valor <br/>");
			}


			$num[0] = "um";
			$num[1] = "dois";
			$num[2] = "três";
			$num[3] = "quatro";
			$num[4] = "cinco";


			foreach ($num as $valor) {
				echo("Valor é $valor <br/>");
			}




		 ?>
	</body>
</html>




<html>
	<body>
		<?php 
			$salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500);

			echo "Salário de João é " . $salarios['João'] . "<br/>";
			echo "Salário de Pedro é " . $salarios['Pedro'] . "<br/>";
			echo "Salário de Maria é " . $salarios['Maria'] . "<br/>";



			$salarios['João'] = "Alto";
			$salarios['Pedro'] = "Médio";
			$salarios['Maria'] = "Baixo";


			echo "Salário de João é " . $salarios['João'] . "<br />";
			echo "Salário de Pedro é " . $salarios['Pedro'] . "<br />";
			echo "Salário de Maria é " . $salarios['Maria'] . "<br />";



		 ?>
	</body>
</html>