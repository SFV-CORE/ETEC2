<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "registros";


	$conn = @mysqli_connect($servidor, $usuario, $senha, $banco) or die("ERRO!!!");


	mysqli_query($conn,"SET NAMES 'utf8'");
	mysqli_query($conn,"SET character_set_connection=utf8");
	mysqli_query($conn,"SET character_set_client=utf8");
	mysqli_query($conn,"SET character_set_results=utf8");

?>
