<?php
	$servidor = "mysql744.umbler.com:41890";
	$usuario = "root_caio";
	$senha = "8143Caio";
	$dbname = "visitas_gabinete";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
