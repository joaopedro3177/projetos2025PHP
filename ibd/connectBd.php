<?php 

	$host = 'localhost';
	$user = 'jotape';
	$pass = '123456';
	$db = 'dbpadaria';
	
	$con = mysqli_connect($host,$user,$pass,$db);

	if(mysqli_connect_errno()){

		echo "Erro ao conectar ao Banco de dados: " . mysqli_connect_error();

	}else{

		$sql = 'create table tbPessoas(
		codPessoa int not null auto_increment, 
		nome varchar(100),
		email varchar(100),
		telCel char(10),
		primary key(codPessoa))';

		if(mysqli_query($con,$sql)){
			echo "Tabela criada com sucesso!!!";
			

		}
		mysqli_close($con);
	}


 ?>