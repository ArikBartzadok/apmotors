<?php
include ('conecta.php');
session_start();

$email = filter_input(INPUT_POST, "txt_email");
$senha = md5(filter_input(INPUT_POST, "txt_senha"));

$sql = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
$query = mysqli_query($conecta, $sql);
$rows = mysqli_num_rows($query);

$_SESSION['logado'] = 0;

if($rows != 0) {
    $_SESSION['logado'] = 1;
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../home.php'><script type='text/javascript'>alert('Logado com sucesso!');</script>";
}
else {
	$_SESSION['logado'] = 0;
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../interface/form_login.php'><script type='text/javascript'>alert('Usuário ou senha incorretos');</script>";
}
?>