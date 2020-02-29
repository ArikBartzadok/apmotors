<?php
include ('conecta.php');

$id = filter_input(INPUT_POST, "txt_id");

$sql = "DELETE FROM agendamentos WHERE id = '$id'";
$query = mysqli_query($conecta, $sql);

if (mysqli_affected_rows($conecta) != 0){
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/apmotors/site/interface/listaAgendamentosAdm.php'>"
    . "<script type='text/javascript'>"
    . "alert('Agendamento excluido com sucesso!');</script>";
}
else {
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/apmotors/site/interface/formExcluiAgendamento.php'>"
    . "<script type='text/javascript'>"
    . "alert('Erro ao excluir o Agendamento.');</script>";
}
?>