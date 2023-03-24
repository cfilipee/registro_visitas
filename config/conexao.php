<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "cadastro_teste";
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
