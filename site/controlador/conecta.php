<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "apmotors";

$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);
if(!$conecta) {
	die("Erro na conexão com o banco de dados." . mysqli_connect_error());
}
?>