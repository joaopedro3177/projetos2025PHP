<?php 

	$host = 'localhost';
	$user = 'jotape';
	$pass = '123456';
	$db = 'dbloja';
	
	$con = mysqli_connect($host,$user,$pass,$db);

	if(mysqli_connect_errno()){

		echo "Erro ao conectar ao Banco de dados: " . mysqli_connect_error();

	}else{
		$sql = 'create database dbPadaria';

		mysqli_query($con,$sql)
		echo "Banco de dados conectado!!!";
		mysqli_close($con);
	}


 ?>