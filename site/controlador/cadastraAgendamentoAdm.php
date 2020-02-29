<?php
include ('conecta.php');

$nome = filter_input(INPUT_POST, "txt_nome");
$email = filter_input(INPUT_POST, "txt_email");
$tel = filter_input(INPUT_POST, "txt_tel");
$cpf = filter_input(INPUT_POST, "txt_cpf");
$tipo = filter_input(INPUT_POST, "txt_tipo");
$valor = "Em análise";

$sql = "INSERT INTO agendamentos (nome, email, telefone, cpf, tipo, valor) VALUES ('$nome', '$email', '$tel', '$cpf', '$tipo', '$valor');";
$query = mysqli_query($conecta, $sql);
$rows = mysqli_affected_rows($conecta);

if($rows != 0) {
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/apmotors/site/interface/formCadastraAgendamentoAdm.php'><script type='text/javascript'>alert('Agendamento cadastrado com sucesso!');</script>";
}
else {
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/apmotors/site/interface/formCadastraAgendamentoAdm.php'><script type='text/javascript'>alert('Erro ao cadastrar Agendamento.');</script>";
}
?>