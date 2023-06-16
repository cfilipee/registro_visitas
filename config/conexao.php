<?php
$servidor = "mysql744.umbler.com:41890";
$usuario = "filipe_root";
$senha = "8143filipe";
$dbname = "visitas_gabinete";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conn) {
	echo "ERROR: 1";
} else {
	//echo "Conexao realizada com sucesso";
}
