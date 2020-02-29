<?php
include ('conecta.php');

$nome = filter_input(INPUT_POST, "txt_nome");
$email = filter_input(INPUT_POST, "txt_email");
$senha = md5(filter_input(INPUT_POST, "txt_senha"));

$sql = "INSERT INTO adm (nome, email, senha) VALUES ('$nome', '$email', '$senha');";
$query = mysqli_query($conecta, $sql);
$rows = mysqli_affected_rows($conecta);

if($rows != 0) {
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/apmotors/site/interface/formCadastraAdm.php'><script type='text/javascript'>alert('Administrador cadastrado com sucesso! Faça seu Login!');</script>";
}
else {
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/apmotors/site/interface/formCadastraUsuario.php'><script type='text/javascript'>alert('Erro ao cadastrar ADM.');</script>";
}
?>