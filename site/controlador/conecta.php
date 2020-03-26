<?php
$servidor = "ec2-34-200-101-236.compute-1.amazonaws.com";
$usuario = "abakvxfeiruzzv";
$senha = "f9ae6959cd0a77b0014bb807f7b6aef81b0790a2f5ca3271bfe2e5594a1c289b";
$banco = "dbuaoc1kif77ut";
/*
$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);
if(!$conecta) {
	die("Erro na conexão com o banco de dados." . mysqli_connect_error());
}
*/

//postgree
$con_string = "host=ec2-34-200-101-236.compute-1.amazonaws.com port=5432 dbname=dbuaoc1kif77ut user=abakvxfeiruzzv password=f9ae6959cd0a77b0014bb807f7b6aef81b0790a2f5ca3271bfe2e5594a1c289b";
$bdcon = pg_connect($con_string);
if(!$bdcon) {
	die("Erro na conexão com o banco de dados.");
}
?>
